<?php

namespace Hotmart\Auth\Request;

use Hotmart\Request\AbstractRequest;

use Hotmart\Auth\Token;
use Hotmart\Auth\Environment;

/**
 * Class QueryAccessTokenRequest
 *
 * @package Hotmart\Auth\Request
 */
class QueryAccessTokenRequest extends AbstractRequest
{

    private $environment;

    /**
     * QueryAccessTokenRequest constructor.
     *
     * @param Environment $environment
     */
    public function __construct(Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * @param $paymentId
     *
     * @return Hotmart\Auth\API\Token
     * @throws \GuzzleHttp\Exception\ConnectException
     */
    public function execute($auth)
    {
        $url = $this->environment->getApiUrl() . 'oauth2/token';

        $auth_request = [
            $auth->getClientId(),
            $auth->getClientSecret()
        ];

        $headers = [
            'Accept: application/json',
            'User-Agent: Gerenciagram Hotmart API PHP SDK',
        ];

        $form_params = [
            'grant_type' => 'client_credentials'
        ];

        return $this->post($url, [], $headers, [], $auth_request, $form_params);
        
    }

    /**
     * @param $json
     *
     * @return Token
     */
    protected function unserialize($json)
    {
        return Token::fromJson($json);
    }

}
