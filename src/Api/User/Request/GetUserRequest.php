<?php

namespace Hotmart\Api\User\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\User\UserSimplifiedResponseVO;
/**
 * Class GetUserRequest
 *
 * @package Hotmart\Api\Request\User
 */
class GetUserRequest extends AbstractRequest
{

    private $environment;

    private $id;

    private $ucode;

    /**
     * GetUserRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     */
    public function __construct(Hotconnect $hotconnect, Environment $environment, $id, $ucode)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;

        $this->id = $id;
        $this->ucode = $ucode;
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
        $url = "{$this->environment->getApiUrl()}user/rest/v2?id={$this->id}&ucode={$this->ucode}";

        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return UserSimplifiedResponseVO
     */
    protected function unserialize($json)
    {
        return UserSimplifiedResponseVO::fromJson($json);
    }
   
}
