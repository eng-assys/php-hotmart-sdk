<?php

namespace Hotmart\Api\Report\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Common\ResultData;
/**
 * Class GetPurchaseDetailsRequest
 *
 * @package Hotmart\Api\Request\Report
 */
class GetPurchaseDetailsRequest extends AbstractRequest
{
    private $environment;

    /**
     * GetPurchaseDetailsRequest constructor.
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
     * @param $purchaseDetailsQuery
     *
     * @return ResultData<SubscriptionResponseVO>
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($purchaseDetailsQuery)
    {
        $url = $this->environment->getApiUrl() . 'reports/rest/v2/purchaseDetails';

        return $this->send($url, 'POST', $purchaseDetailsQuery);
    }

    /**
     * @param $json
     *
     * @return ResultData<SubscriptionResponseVO>
     */
    protected function unserialize($json)
    {
        return ResultData::fromJson($json);
    }
   
}
