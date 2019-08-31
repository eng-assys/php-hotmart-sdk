<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;
class Subscription implements HotmartSerializable
{
    // string
    private $subscriberCode;

    // enum [ 'ACTIVE', 'INACTIVE', 'DELAYED', 'CANCELLED_BY_CUSTOMER', 'CANCELLED_BY_SELLER', 'CANCELLED_BY_ADMIN', 'OVERDUE', 'STARTED' ]
    private $status;

    // integer
    private $expireDay;

    // boolean
    private $availableSwitchPlan;

    // string
    private $codReasonNotSwitchPlan;

    // string
    private $reasonNotSwitchPlan;

    // Recurrency
    private $recurrency;

    // Product
    private $product;

    // User
    private $user;

    // array of SubscriptionPlan
    private $plans;
    
    /**
     * @param $json
     *
     * @return Subscription
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new Subscription();
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