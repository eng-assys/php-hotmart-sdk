<?php

namespace Hotmart\Api\SwitchPlan;

use Hotmart\Api\HotmartSerializable;
class SendInviteSwitchPlanRequest implements HotmartSerializable
{
    // Long
    private $idProduct;

    // array of String
    private $listSubscriberCode;

    // array of String
    private $listOfferCode;

    // Boolean
    private $onlyAvailableSwitchPlan;

    /**
     * @param $json
     *
     * @return SendInviteSwitchPlanRequest
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SendInviteSwitchPlanRequest();
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