<?php

namespace Hotmart\Api\SwitchPlan;

use Hotmart\Api\HotmartSerializable;
class SwitchPlanPlansRequest implements HotmartSerializable
{
    // long
    private $idProduct;

    // array of String
    private $listSubscriberCode;

    // array of String
    private $listOfferCode;

    // boolean
    private $onlyInfoPlans;

    // boolean
    private $onlyAvailableSwitchPlan;

    /**
     * @param $json
     *
     * @return SwitchPlanPlansRequest
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SwitchPlanPlansRequest();
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