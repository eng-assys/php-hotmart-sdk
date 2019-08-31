<?php

namespace Hotmart\Auth;

use Hotmart\Auth\Request\GetAccessTokenRequest;

/**
 * The Hotmart Auth SDK front-end;
 */
class HotmartAuth
{

    private $environment;

    /**
     * Create an instance of HotmartAuth choosing the environment where the
     * requests will be send
     *     
     * @param Environment environment
     *            The environment: {@link Environment::production()} or
     *            {@link Environment::sandbox()}
     */
    public function __construct(Environment $environment = null)
    {
        if ($environment == null) {
            $environment = Environment::sandbox();
        }

        $this->environment = $environment;
    }

    /**
     * Creates an access token in Hotmart.
     *
     * @param Auth $auth
     * 
     * @return Token The access Token returned by Hotmart.
     *
     * @throws ConnectException if anything gets wrong.
     *
     */
    public function getAccessToken($auth)
    {
        $getAccessTokenRequest = new GetAccessTokenRequest($this->environment);

        return $getAccessTokenRequest->execute($auth);
    }
}
