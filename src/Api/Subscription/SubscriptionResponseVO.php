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

        $newObject = new SubscriptionResponseVO();
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
     * Get the value of subscriptionId
     */ 
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Set the value of subscriptionId
     *
     * @return  self
     */ 
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get the value of accessionDate
     */ 
    public function getAccessionDate()
    {
        return $this->accessionDate;
    }

    /**
     * Set the value of accessionDate
     *
     * @return  self
     */ 
    public function setAccessionDate($accessionDate)
    {
        $this->accessionDate = $accessionDate;

        return $this;
    }

    /**
     * Get the value of endAccessionDate
     */ 
    public function getEndAccessionDate()
    {
        return $this->endAccessionDate;
    }

    /**
     * Set the value of endAccessionDate
     *
     * @return  self
     */ 
    public function setEndAccessionDate($endAccessionDate)
    {
        $this->endAccessionDate = $endAccessionDate;

        return $this;
    }

    /**
     * Get the value of trialPeriod
     */ 
    public function getTrialPeriod()
    {
        return $this->trialPeriod;
    }

    /**
     * Set the value of trialPeriod
     *
     * @return  self
     */ 
    public function setTrialPeriod($trialPeriod)
    {
        $this->trialPeriod = $trialPeriod;

        return $this;
    }

    /**
     * Get the value of requestDate
     */ 
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * Set the value of requestDate
     *
     * @return  self
     */ 
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * Get the value of trial
     */ 
    public function getTrial()
    {
        return $this->trial;
    }

    /**
     * Set the value of trial
     *
     * @return  self
     */ 
    public function setTrial($trial)
    {
        $this->trial = $trial;

        return $this;
    }

    /**
     * Get the value of plan
     */ 
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set the value of plan
     *
     * @return  self
     */ 
    public function setPlan($plan)
    {
        $this->plan = $plan;

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
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of subscriber
     */ 
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * Set the value of subscriber
     *
     * @return  self
     */ 
    public function setSubscriber($subscriber)
    {
        $this->subscriber = $subscriber;

        return $this;
    }

    /**
     * Get the value of subscriberInfo
     */ 
    public function getSubscriberInfo()
    {
        return $this->subscriberInfo;
    }

    /**
     * Set the value of subscriberInfo
     *
     * @return  self
     */ 
    public function setSubscriberInfo($subscriberInfo)
    {
        $this->subscriberInfo = $subscriberInfo;

        return $this;
    }
}