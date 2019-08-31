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
        foreach (get_object_vars($this) as $key => $value) {
            $this->{$key} = $data->{$key} ?? null;
        }
    }
    

    /**
     * Get the value of idSwitchPlanSolicitation
     */ 
    public function getIdSwitchPlanSolicitation()
    {
        return $this->idSwitchPlanSolicitation;
    }

    /**
     * Set the value of idSwitchPlanSolicitation
     *
     * @return  self
     */ 
    public function setIdSwitchPlanSolicitation($idSwitchPlanSolicitation)
    {
        $this->idSwitchPlanSolicitation = $idSwitchPlanSolicitation;

        return $this;
    }

    /**
     * Get the value of subscription
     */ 
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Set the value of subscription
     *
     * @return  self
     */ 
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * Get the value of statusInviteSwitchPlan
     */ 
    public function getStatusInviteSwitchPlan()
    {
        return $this->statusInviteSwitchPlan;
    }

    /**
     * Set the value of statusInviteSwitchPlan
     *
     * @return  self
     */ 
    public function setStatusInviteSwitchPlan($statusInviteSwitchPlan)
    {
        $this->statusInviteSwitchPlan = $statusInviteSwitchPlan;

        return $this;
    }
}