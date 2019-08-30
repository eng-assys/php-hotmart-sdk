<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;
class SubscriptionResponseVO implements HotmartSerializable
{
    // string
    private $subscriberCode;

    // integer
    private $subscriptionId;

    // date
    private $accessionDate;

    // date
    private $endAccessionDate;

    // integer

    private $trialPeriod;

    // date
    private $requestDate;

    // boolean
    private $trial;

    // PlanResponseVO
    private $plan;

    // ProductSimplifiedResponseVO
    private $product;

    // CurrencyValueVO
    private $price;

    // SubscriberResponseVO
    private $subscriber;

    // BuyerInfoResponseVO
    private $subscriberInfo;

   /**
     * @param \stdClass $data
     *
     * @return mixed
     */
    public function populate(\stdClass $data)
    {

    }

    /**
     * @param string $json
     *
     * @return mixed
     */
    public static function fromJson(string $json)
    {

    }
    
}