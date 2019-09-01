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

        $newObject = new SubscriptionPlan();
        $newObject->populate(json_decode($json));

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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of frequencyRecurrenceDays
     */ 
    public function getFrequencyRecurrenceDays()
    {
        return $this->frequencyRecurrenceDays;
    }

    /**
     * Set the value of frequencyRecurrenceDays
     *
     * @return  self
     */ 
    public function setFrequencyRecurrenceDays($frequencyRecurrenceDays)
    {
        $this->frequencyRecurrenceDays = $frequencyRecurrenceDays;

        return $this;
    }

    /**
     * Get the value of maxChargeCycles
     */ 
    public function getMaxChargeCycles()
    {
        return $this->maxChargeCycles;
    }

    /**
     * Set the value of maxChargeCycles
     *
     * @return  self
     */ 
    public function setMaxChargeCycles($maxChargeCycles)
    {
        $this->maxChargeCycles = $maxChargeCycles;

        return $this;
    }

    /**
     * Get the value of offer
     */ 
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Set the value of offer
     *
     * @return  self
     */ 
    public function setOffer($offer)
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Get the value of availableSwitchPlan
     */ 
    public function getAvailableSwitchPlan()
    {
        return $this->availableSwitchPlan;
    }

    /**
     * Set the value of availableSwitchPlan
     *
     * @return  self
     */ 
    public function setAvailableSwitchPlan($availableSwitchPlan)
    {
        $this->availableSwitchPlan = $availableSwitchPlan;

        return $this;
    }

    /**
     * Get the value of codReasonNotSwitchPlan
     */ 
    public function getCodReasonNotSwitchPlan()
    {
        return $this->codReasonNotSwitchPlan;
    }

    /**
     * Set the value of codReasonNotSwitchPlan
     *
     * @return  self
     */ 
    public function setCodReasonNotSwitchPlan($codReasonNotSwitchPlan)
    {
        $this->codReasonNotSwitchPlan = $codReasonNotSwitchPlan;

        return $this;
    }

    /**
     * Get the value of reasonNotSwitchPlan
     */ 
    public function getReasonNotSwitchPlan()
    {
        return $this->reasonNotSwitchPlan;
    }

    /**
     * Set the value of reasonNotSwitchPlan
     *
     * @return  self
     */ 
    public function setReasonNotSwitchPlan($reasonNotSwitchPlan)
    {
        $this->reasonNotSwitchPlan = $reasonNotSwitchPlan;

        return $this;
    }
}