<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Common\PurchaseResponseVO;


/**
 * Class ExchangeBillingDayOfASubscriptionRequest
 *
 * Exchange billing day of a subscription by the given code
 * 
 * @package Hotmart\Api\Request\Subscription
 */
class ExchangeBillingDayOfASubscriptionRequest extends AbstractRequest
{

    private $environment;

    /**
     * ExchangeBillingDayOfASubscriptionRequest constructor.
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
     * @param integer $day Billing day between 1 and 28
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($day)
    {
        $url = "{$this->environment->getApiUrl()}subscription/rest/v2/{$this->subscriptionCode}/changePaymentDay/{$day}";

        return $this->send($url, 'PUT');
    }

    /**
     * @param $json
     *
     * @return null
     */
    protected function unserialize($json)
    {
        return null;
    }
   
}
