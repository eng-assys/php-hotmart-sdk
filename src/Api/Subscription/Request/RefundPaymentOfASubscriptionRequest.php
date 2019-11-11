<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Common\PurchaseResponseVO;


/**
 * Class RefundPaymentOfASubscriptionRequest
 *
 * Refund a subscription payment by the given code and payment reference
 * 
 * @package Hotmart\Api\Request\Subscription
 */
class RefundPaymentOfASubscriptionRequest extends AbstractRequest
{

    private $environment;

    private $subscriptionCode;

    private $paymentReference;

    /**
     * RefundPaymentOfASubscriptionRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     */
    public function __construct(Hotconnect $hotconnect, Environment $environment, $subscriptionCode, $paymentReference)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;

        $this->subscriptionCode = $subscriptionCode;

        $this->paymentReference = $paymentReference;
    }

    /**
     * @param $param null
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param = null)
    {
        $url = "{$this->environment->getApiUrl()}subscription/rest/v2/{$this->subscriptionCode}/payment/{$this->paymentReference}/refund";

        return $this->send($url, 'PUT');
    }

    /**
     * @param $json
     *
     * @return  null
     */
    protected function unserialize($json)
    {
        return null;
    }
   
}
