<?php

namespace Hotmart\Api\SwitchPlan;

use Hotmart\Api\HotmartSerializable;
class InfoInviteSwitchPlan implements HotmartSerializable
{
    // Long
    private $idSwitchPlanSolicitation;

    // Subscription
    private $subscription;

    // enum [ 'ALL_SENT', 'PARTIALLY_SENT', 'NONE_SENT', 'ERROR' ]
    private $statusInviteSwitchPlan;

    /**
     * @param $json
     *
     * @return InfoInviteSwitchPlan
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new InfoInviteSwitchPlan();
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