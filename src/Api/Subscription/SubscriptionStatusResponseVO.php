<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;

class SubscriptionStatusResponseVO implements HotmartSerializable
{
    /** Subscription identification code
     * @var string
     * */
    private $subscriberCode;

    /** Date of subscription creation
     * @var string|null
     * */
    private $creationDate;

    /** Current recurrence number of 'maxChargeCycles'
     * @var integer|null
     * */
    private $currentRecurrence;

    /** Date of last billing payment
     * @var string|null
     * */
    private $dateLastRecurrence;

    /** Schedule date of next billing.
     * @var string|null
     * */
    private $dateNextCharge;

    /** Reference day for due charges. For monthly or yearly subscriptions means month day, however weekly subscriptions this field means the day of the week [1-Monday, 2-Tuesday, 3-Wednesday, 4-Thursday, 5-Friday, 6-Saturday, 7-Sunday].
     * @var integer|null
     * */
    private $dueDay;

    /** Number of days for trial subscription period.
     * @var integer|null
     * */
    private $daysToStartSubscription;

    /** Type of subscription's charge ['DAY', 'WEEK', 'MONTH', 'INVOICE'].
     * @var string|null
     * */
    private $intervalTypeBetweenCharges;

    /** Number of days for trial subscription period.
     * @var integer|null
     * */
    private $maxChargeCycles;

    /**	Current status of subscription ['ACTIVE', 'INACTIVE'].
     * @var string|null
     * */
    private $status;

    /**	Date of subscription activation.
     * @var string|null
     * */
    private $activationDate;

    /**	Shopper register email address.
     * @var string|null
     * */
    private $emailShopper;

    /**	Shopper register phone number.
     * @var string|null
     * */
    private $phoneShopper;

    /** Reference error got when process subscription list.
     *  This tag will be only showed if got some error on process subscription.
     * @var string|null
     * */
    private $error;

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
     * Get the value of creationDate
     */ 
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set the value of creationDate
     *
     * @return  self
     */ 
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get the value of currentRecurrence
     */ 
    public function getCurrentRecurrence()
    {
        return $this->currentRecurrence;
    }

    /**
     * Set the value of currentRecurrence
     *
     * @return  self
     */ 
    public function setCurrentRecurrence($currentRecurrence)
    {
        $this->currentRecurrence = $currentRecurrence;

        return $this;
    }

    /**
     * Get the value of dateLastRecurrence
     */ 
    public function getDateLastRecurrence()
    {
        return $this->dateLastRecurrence;
    }

    /**
     * Set the value of dateLastRecurrence
     *
     * @return  self
     */ 
    public function setDateLastRecurrence($dateLastRecurrence)
    {
        $this->dateLastRecurrence = $dateLastRecurrence;

        return $this;
    }

    /**
     * Get the value of dateNextCharge
     */ 
    public function getDateNextCharge()
    {
        return $this->dateNextCharge;
    }

    /**
     * Set the value of dateNextCharge
     *
     * @return  self
     */ 
    public function setDateNextCharge($dateNextCharge)
    {
        $this->dateNextCharge = $dateNextCharge;

        return $this;
    }

    /**
     * Get the value of dueDay
     */ 
    public function getDueDay()
    {
        return $this->dueDay;
    }

    /**
     * Set the value of dueDay
     *
     * @return  self
     */ 
    public function setDueDay($dueDay)
    {
        $this->dueDay = $dueDay;

        return $this;
    }

    /**
     * Get the value of daysToStartSubscription
     */ 
    public function getDaysToStartSubscription()
    {
        return $this->daysToStartSubscription;
    }

    /**
     * Set the value of daysToStartSubscription
     *
     * @return  self
     */ 
    public function setDaysToStartSubscription($daysToStartSubscription)
    {
        $this->daysToStartSubscription = $daysToStartSubscription;

        return $this;
    }

    /**
     * Get the value of intervalTypeBetweenCharges
     */ 
    public function getIntervalTypeBetweenCharges()
    {
        return $this->intervalTypeBetweenCharges;
    }

    /**
     * Set the value of intervalTypeBetweenCharges
     *
     * @return  self
     */ 
    public function setIntervalTypeBetweenCharges($intervalTypeBetweenCharges)
    {
        $this->intervalTypeBetweenCharges = $intervalTypeBetweenCharges;

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
     * Get the value of activationDate
     */ 
    public function getActivationDate()
    {
        return $this->activationDate;
    }

    /**
     * Set the value of activationDate
     *
     * @return  self
     */ 
    public function setActivationDate($activationDate)
    {
        $this->activationDate = $activationDate;

        return $this;
    }

    /**
     * Get the value of emailShopper
     */ 
    public function getEmailShopper()
    {
        return $this->emailShopper;
    }

    /**
     * Set the value of emailShopper
     *
     * @return  self
     */ 
    public function setEmailShopper($emailShopper)
    {
        $this->emailShopper = $emailShopper;

        return $this;
    }

    /**
     * Get the value of phoneShopper
     */ 
    public function getPhoneShopper()
    {
        return $this->phoneShopper;
    }

    /**
     * Set the value of phoneShopper
     *
     * @return  self
     */ 
    public function setPhoneShopper($phoneShopper)
    {
        $this->phoneShopper = $phoneShopper;

        return $this;
    }

    /**
     * Get the value of error
     */ 
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set the value of error
     *
     * @return  self
     */ 
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
}