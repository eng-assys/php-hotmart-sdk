<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Subscription\SubscriptionStatusListResponseVO;


/**
 * Class ReactivateAndChargeAListOfInactiveSubscriptionsRequest
 *
 * Reactivate an inactive subscription using subscription code as reference and apply a new charge
 * 
 * @package Hotmart\Api\Request\Subscription
 */
class ReactivateAndChargeAListOfInactiveSubscriptionsRequest extends AbstractRequest
{

    private $environment;

    /**
     * ReactivateAndChargeAListOfInactiveSubscriptionsRequest constructor.
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
     * @param array $subscriptionsArray
     *
     * @return SubscriptionStatusListResponseVO
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($subscriptionsArray)
    {
        $url = "{$this->environment->getApiUrl()}subscription/rest/v2/reactivateAndCharge/list";

        return $this->send($url, 'POST', $subscriptionsArray);
    }

    /**
     * @param $json
     *
     * @return SubscriptionStatusListResponseVO
     */
    protected function unserialize($json)
    {
        return SubscriptionStatusListResponseVO::fromJson($json);
    }
   
}
