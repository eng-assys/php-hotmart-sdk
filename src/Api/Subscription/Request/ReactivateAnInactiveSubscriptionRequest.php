<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Subscription\SubscriptionStatusResponseVO;


/**
 * Class ReactivateAnInactiveSubscriptionRequest
 *
 * Get subscription list of purchases
 * 
 * @package Hotmart\Api\Request\Subscription
 */
class ReactivateAnInactiveSubscriptionRequest extends AbstractRequest
{

    private $environment;

    private $subscriptionCode;

    /**
     * ReactivateAnInactiveSubscriptionRequest constructor.
     * 
     * Reactivate an inactive subscription using subscription code as reference
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
     * @return SubscriptionStatusResponseVO
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param = null)
    {
        $url = "{$this->environment->getApiUrl()}subscription/rest/v2/{$this->subscriptionCode}/reactivate";

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
