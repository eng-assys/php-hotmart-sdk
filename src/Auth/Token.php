<?php

namespace Hotmart\Auth;

/**
 * Class Token
 *
 * @package Hotmart\Auth
 */
class Token implements \JsonSerializable
{
    private $accessToken;

    private $tokenType;

    private $expiresIn;

    private $scope;

    private $jti;

    /**
     * @param $json
     *
     * @return Token
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $auth = new Token();
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
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->accessToken = isset($data->access_token) ? $data->access_token : null;
        $this->tokenType = isset($data->token_type) ? $data->token_type : null;
        $this->expiresIn = isset($data->expires_in) ? $data->expires_in : null;
        $this->scope = isset($data->scope) ? $data->scope : null;
        $this->jti = isset($data->jti) ? $data->jti : null;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param $accessToken
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @param $tokenType
     *
     * @return $this
     */
    public function setTokenType($tokenType)
    {
        $this->tokenType = $tokenType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @param $expiresIn
     *
     * @return $this
     */
    public function setExpiresIn($expiresIn)
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJti()
    {
        return $this->jti;
    }

    /**
     * @param $jti
     *
     * @return $this
     */
    public function setJti($jti)
    {
        $this->jti = $jti;

        return $this;
    }

}
