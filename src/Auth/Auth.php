<?php

namespace Hotmart\Auth;

/**
 * Class Auth
 *
 * @package Hotmart\Auth
 */
class Auth implements \JsonSerializable
{
    private $client_id;

    private $client_secret;

    private $client_basic;

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
     * @param $client_id
     * @param $client_secret
     * @param $client_basic
     */
    public function __construct($client_id, $client_secret, $client_basic)
    {
        $this->client_id  = $client_id;
        $this->client_secret  = $client_secret;
        $this->client_basic  = $client_basic;
    }

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->client_id = isset($data->client_id) ? $data->client_id : null;
        $this->client_secret = isset($data->client_secret) ? $data->client_secret : null;
        $this->client_basic = isset($data->client_basic) ? $data->client_basic : null;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param $client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * @param $client_secret
     *
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->client_secret = $client_secret;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientBasic()
    {
        return $this->client_basic;
    }

    /**
     * @param $client_basic
     *
     * @return $this
     */
    public function setClientBasic($client_basic)
    {
        $this->client_basic = $client_basic;

        return $this;
    }

}
