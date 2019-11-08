<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Common\PurchaseResponseVO;


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

    /**
     * GetSubscriptionPurchasesRequest constructor.
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
