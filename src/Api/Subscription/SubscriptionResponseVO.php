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
     * @param $json
     *
     * @return SubscriptionResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SubscriptionResponseVO();
        $newObject->populate($object);

        return $newObject;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    /**
     * @param \stdClass $data
     *
     * @return mixed
     */
    public function populate(\stdClass $data)
    {

    }
    
}