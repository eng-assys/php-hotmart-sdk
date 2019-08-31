<?php

namespace Hotmart\Auth;

/**
 * Class Environment
 *
 * @package Hotmart\Auth
 */
class Environment implements \Hotmart\Environment
{
    private $api;

    /**
     * Environment constructor.
     *
     * @param $api
     * @param $apiQuery
     */
    private function __construct($api)
    {
        $this->api = $api;
    }

    /**
     * @return Environment
     */
    public static function sandbox()
    {
        $api = 'https://{sandbox-api-auth-url}/';

        return new Environment($api);
    }

    /**
     * @return Environment
     */
    public static function production()
    {
        $api = 'https://api-sec-vlc.hotmart.com/';
        
        return new Environment($api);
    }

    /**
     * Gets the environment's Api URL
     *
     * @return string the Api URL
     */
    public function getApiUrl()
    {
        return $this->api;
    }
}
