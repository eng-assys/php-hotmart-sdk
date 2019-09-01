<?php

namespace Hotmart\Api\User\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\User\UserResponseVO;
/**
 * Class GetLoggedUserRequest
 *
 * @package Hotmart\Api\Request\User
 */
class GetLoggedUserRequest extends AbstractRequest
{

    private $environment;

    /**
     * GetLoggedUserRequest constructor.
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
     * @param null
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param=null)
    {
        $url = $this->environment->getApiUrl() . 'user/rest/v2/me';

        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return UserResponseVO
     */
    protected function unserialize($json)
    {
        return UserResponseVO::fromJson($json);
    }
   
}
