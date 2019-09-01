<?php

namespace Hotmart\Api\User\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;
/**
 * Class CreateUserRequest
 *
 * @package Hotmart\Api\Request\User
 */
class CreateUserRequest extends AbstractRequest
{

    private $environment;

    /**
     * CreateUserRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     */
    public function __construct(Hotconnect $hotconnect, Environment $environment)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;
    }

    /**
     * @param $userRequestVO
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($userRequestVO)
    {
        $url = "{$this->environment->getApiUrl()}user/rest/v2/signup";

        return $this->send($url, 'POST', $userRequestVO);
    }

    /**
     * @param $json
     *
     * @return null
     */
    protected function unserialize($json)
    {
        return null;
    }
   
}
