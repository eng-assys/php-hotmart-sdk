<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Common\PurchaseResponseVO;


/**
 * Class ReactivateAndChargeAnInactiveSubscriptionRequest
 *
 * Reactivate an inactive subscription using subscription code as reference and apply a new charge
 * 
 * @package Hotmart\Api\Request\Subscription
 */
class ReactivateAndChargeAnInactiveSubscriptionRequest extends AbstractRequest
{

    private $environment;

    /**
     * ReactivateAndChargeAnInactiveSubscriptionRequest constructor.
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
     * @param ResultData<PurchaseResponseVO>
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($subscriptionCode)
    {
        // https://api-hot-connect.hotmart.com/subscription/rest/v2/{subscriptionCode}/reactivateAndCharge
        $url = "{$this->environment->getApiUrl()}subscriber/rest/v2/{$subscriptionCode}/purchases";

        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return ResultData<PurchaseResponseVO>
     */
    protected function unserialize($json)
    {
        return ResultData::fromJson($json);
    }
   
}
