<?php

namespace Hotmart\Auth;

/**
 * Class Auth
 *
 * @package Hotmart\Auth
 */
class Auth implements \JsonSerializable
{
    private $clientId;

    private $clientSecret;

    /**
     * @param $json
     *
     * @return Auth
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $auth = new Auth();
        $auth->populate($object);

        return $auth;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    /**
     * Auth constructor.
     *
     * @param $clientId
     * @param $clientSecret
     */
    public function __construct($clientId, $clientSecret)
    {
        $this->clientId  = $clientId;
        $this->clientSecret  = $clientSecret;
    }

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->clientId = isset($data->client_id) ? $data->client_id : null;
        $this->clientSecret = isset($data->client_secret) ? $data->client_secret : null;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param $clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @param $clientSecret
     *
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

}
