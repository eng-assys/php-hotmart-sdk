<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Subscription\SubscriptionPurchaseResponseVO;


/**
 * Class GetSubscriptionPurchasesRequest
 *
 * Get subscription list of purchases
 * 
 * @package Hotmart\Api\Request\Subscription
 */
class GetSubscriptionPurchasesRequest extends AbstractRequest
{

    private $environment;

    private $subscriptionCode;

    /**
     * GetSubscriptionPurchasesRequest constructor.
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
    public function execute($param=null)
    {
        $url = "{$this->environment->getApiUrl()}subscription/rest/v2/{$this->subscriptionCode}/purchases";

        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return array(SubscriptionPurchaseResponseVO)
     */
    protected function unserialize($json)
    {
        return array_map(function ($purchase) {
            return SubscriptionPurchaseResponseVO::fromJson($purchase);
        }, $json);
    }
   
}
