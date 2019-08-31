<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;
class SubscriptionPlan implements HotmartSerializable
{
    // string
    private $name;

    // enum [ 'WEEKLY', 'MONTHLY', 'BIMONTHLY', 'QUARTERLY', 'BIANNUAL', 'ANNUAL' ]
    private $frequencyRecurrenceDays;

    // integer
    private $maxChargeCycles;

    // offer
    private $offer;

    // boolean
    private $availableSwitchPlan;

    // string
    private $codReasonNotSwitchPlan;

    // string
    private $reasonNotSwitchPlan;

    /**
     * @param $json
     *
     * @return SubscriptionPlan
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SubscriptionPlan();
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