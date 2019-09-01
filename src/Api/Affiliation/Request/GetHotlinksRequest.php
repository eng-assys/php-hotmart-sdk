<?php

namespace Hotmart\Api\Affiliation\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Common\ResultData;

/**
 * Class GetHotlinksRequest
 *
 * @package Hotmart\Api\Request\Affiliation
 */
class GetHotlinksRequest extends AbstractRequest
{

    private $environment;

    /**
     * GetHotlinksRequest constructor.
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
     * @return ResultData<AffiliationResponseVO>
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param=null)
    {
        $url = $this->environment->getApiUrl() . 'affiliation/rest/v2/';

        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return ResultData
     */
    protected function unserialize($json)
    {
        $json_decoded = json_decode($json);
        $json_decoded = isset($json_decoded->body) ? $json_decoded->body : $json_decoded;
        $json = json_encode($json_decoded);
        return ResultData::fromJson($json);
    }
   
}
