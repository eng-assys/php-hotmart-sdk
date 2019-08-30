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