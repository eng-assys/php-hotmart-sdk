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
        foreach (get_object_vars($this) as $key => $value) {
            $this->{$key} = $data->{$key} ?? null;
        }
    }
    

    /**
     * Get the value of subscriberCode
     */ 
    public function getSubscriberCode()
    {
        return $this->subscriberCode;
    }

    /**
     * Set the value of subscriberCode
     *
     * @return  self
     */ 
    public function setSubscriberCode($subscriberCode)
    {
        $this->subscriberCode = $subscriberCode;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of expireDay
     */ 
    public function getExpireDay()
    {
        return $this->expireDay;
    }

    /**
     * Set the value of expireDay
     *
     * @return  self
     */ 
    public function setExpireDay($expireDay)
    {
        $this->expireDay = $expireDay;

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

    /**
     * Get the value of recurrency
     */ 
    public function getRecurrency()
    {
        return $this->recurrency;
    }

    /**
     * Set the value of recurrency
     *
     * @return  self
     */ 
    public function setRecurrency($recurrency)
    {
        $this->recurrency = $recurrency;

        return $this;
    }

    /**
     * Get the value of product
     */ 
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */ 
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of plans
     */ 
    public function getPlans()
    {
        return $this->plans;
    }

    /**
     * Set the value of plans
     *
     * @return  self
     */ 
    public function setPlans($plans)
    {
        $this->plans = $plans;

        return $this;
    }
}