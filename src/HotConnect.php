<?php

namespace Hotmart;

/**
 * Class HotConnect
 *
 * @package Hotmart
 */
class HotConnect
{
    private $token;

    /**
     * HotConnect constructor.
     *
     * @param $token
     */
    public function __construct($token)
    {
        $this->token  = $token;
    }

    /**
     * Gets the hotconnect token
     *
     * @return string the hotconnect token on Hotmart
     */
    public function getToken()
    {
        return $this->token;
    }
}
