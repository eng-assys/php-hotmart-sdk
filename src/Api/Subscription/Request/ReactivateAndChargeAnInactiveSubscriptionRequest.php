<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Subscription\SubscriptionStatusResponseVO;


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

    private $subscriptionCode;

    /**
     * ReactivateAndChargeAnInactiveSubscriptionRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     */
    public function __construct(Hotconnect $hotconnect, Environment $environment, $subscriptionCode)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;

        $this->subscriptionCode = $subscriptionCode;
    }

    /**
     * @param ResultData<PurchaseResponseVO>
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param = null)
    {
        $url = "{$this->environment->getApiUrl()}subscription/rest/v2/{$this->subscriptionCode}/reactivateAndCharge";

        return $this->send($url, 'PUT');
    }

    /**
     * @param $json
     *
     * @return SubscriptionStatusResponseVO
     */
    protected function unserialize($json)
    {
        return SubscriptionStatusResponseVO::fromJson($json);
    }
   
}
