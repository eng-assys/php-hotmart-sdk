<?php 

namespace Hotmart\Request;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

use Hotmart\HotConnect;

abstract class AbstractRequest {

    private $hotconnect;

    /**
     * AbstractRequest constructor.
     *
     * @param HotConnect $hotconnect
     */
    public function __construct(HotConnect $hotconnect = null)
    {
        $this->hotconnect = $hotconnect;
    }

    private function removeEmptyKeys($data)
    {
        $data = !is_array($data) ? json_decode($data, true) : $data;
        if (!$data) return [];
        foreach ($data as $key => $value) {
            if (gettype($data[$key]) == 'array') {
                $data[$key] = $this->removeEmptyKeys($data[$key]);
            } else if ($value == null) {
                unset($data[$key]);
            }
        }
        return $data;
    }

    private function send($url, $method, $body, $headers = [], $options = [], $auth = [], $formParams = [])
    {
        if(isset($this->hotconnect) && empty($headers)){
            $headers = [
                'Accept: application/json',
                'Accept-Encoding: gzip',
                'User-Agent: Gerenciagram Hotmart PHP SDK',
                'Authorization' => "Bearer {$this->hotconnect->getToken()}",
                'RequestId: ' . uniqid()
            ];
        }
        
        $request_params = [
            'headers' => $headers,
            'json' => $this->removeEmptyKeys($body),
            'auth' => $auth,
            'form_params' => $formParams
        ];
        $request_params = array_filter($request_params); // Remove null and empty array fields

        $guzzle_client = new GuzzleClient($options);

        $exceptionMessage = null;
        try {
            $callback = $guzzle_client->request($method, $url, $request_params);
            $jsonBody = $callback->getBody();
            $statusCode = $callback->getStatusCode();
        } catch (ConnectException | ClientException | ServerException $ex) {
            $exceptionMessage = $ex->getMessage();
            $jsonBody = $ex->getResponse()->getBody();
            $statusCode = $ex->getResponse()->getStatusCode();
        }

        return $this->readResponse($statusCode, $jsonBody, $exceptionMessage);

    }

    /**
     * @param $method
     * @param $url
     * @param \JsonSerializable|null $content
     *
     * @return mixed
     *
     * @throws \Hotmart\Request\Hotmart
     * @throws \RuntimeException
     */
    protected function sendRequest($method, $url, \JsonSerializable $content = null){
        return $this->send($url, $method, json_encode($content));
    }

    public function get($url, $headers = [], $options = [], $auth = [])
    {
        return $this->send($url, 'GET', [], $headers, $options, $auth, []);
    }
    
    public function post($url, $body, $headers = [], $options = [], $auth = [], $formParams = [])
    {
        return $this->send($url, 'POST', $body, $headers, $options, $auth, $formParams);
    }
    
    public function put($url, $body, $headers = [], $options = [], $auth = [], $formParams = [])
    {
        return $this->send($url, 'PUT', $body, $headers, $options, $auth, $formParams);
    }
    
    public function delete($url, $body, $headers = [], $options = [], $auth = [], $formParams = [])
    {
        return $this->send($url, 'DELETE', $body, $headers, $options, $auth, $formParams);
    }

    /**
     * @param $statusCode
     * @param $responseBody
     * @param $responseMessage
     *
     * @return mixed
     *
     * @throws Hotmart
     */
    protected function readResponse($statusCode, $responseBody, $responseMessage=null)
    {
        $unserialized = null;

        switch ($statusCode) {
            case 200:
            case 201:
                $unserialized = $this->unserialize($responseBody);
                break;
            case 400:
                $exception = null;
                $response  = json_decode($responseBody);

                foreach ($response as $error) {
                    $hotmartError = new HotmartError($error->Message, $error->Code);
                    $exception  = new HotmartRequestException('Request Error', $statusCode, $exception);
                    $exception->setHotmartError($hotmartError);
                }

                throw $exception;
            case 404:
                throw new HotmartRequestException('Resource not found', 404, null);
            default:
                $responseMessage = empty($responseMessage) ? 'Unknown status' : $responseMessage;
                throw new HotmartRequestException($responseMessage, $statusCode);
        }

        return $unserialized;
    }

    /**
     * @param $param
     *
     * @return mixed
     */
    public abstract function execute($param);

    /**
     * @param $json
     *
     * @return mixed
     */
    protected abstract function unserialize($json);

}