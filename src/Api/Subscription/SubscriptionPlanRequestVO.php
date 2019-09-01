<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;
class SubscriptionPlanRequestVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $description;

    // 	CurrencyValueVO
    private $currencyValue;

    // 	enum [ 'MONTHLY', 'BIMONTHLY', 'QUARTERLY', 'BIANNUAL', 'WEEKLY', 'ANNUAL', 'SINGLE_INSTALLMENT' ]
    private $monthPeriodicity;

    // enum [ 'TWO_RECURRENCIES', 'THREE_RECURRENCIES', 'SIX_RECURRENCIES', 'EIGHT_RECURRENCIES', 'NINE_RECURRENCIES', 'TWELVE_RECURRENCIES', 'FIFTEEN_RECURRENCIES', 'EIGHTEEN_RECURRENCIES', 'TWENTY_FOUR_RECURRENCIES', 'UNTIL_CLIENT_CANCELATION' ]
    private $monthChargeFor;

    // double
    private $standardCommission;

    // double
    private $recurringCommission;

    // integer
    private $trialPeriod;

    /**
     * @param $json
     *
     * @return SubscriptionPlanRequestVO
     */
    public static function fromJson($json)
    {

        $newObject = new SubscriptionPlanRequestVO();
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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of currencyValue
     */ 
    public function getCurrencyValue()
    {
        return $this->currencyValue;
    }

    /**
     * Set the value of currencyValue
     *
     * @return  self
     */ 
    public function setCurrencyValue($currencyValue)
    {
        $this->currencyValue = $currencyValue;

        return $this;
    }

    /**
     * Get the value of monthPeriodicity
     */ 
    public function getMonthPeriodicity()
    {
        return $this->monthPeriodicity;
    }

    /**
     * Set the value of monthPeriodicity
     *
     * @return  self
     */ 
    public function setMonthPeriodicity($monthPeriodicity)
    {
        $this->monthPeriodicity = $monthPeriodicity;

        return $this;
    }

    /**
     * Get the value of monthChargeFor
     */ 
    public function getMonthChargeFor()
    {
        return $this->monthChargeFor;
    }

    /**
     * Set the value of monthChargeFor
     *
     * @return  self
     */ 
    public function setMonthChargeFor($monthChargeFor)
    {
        $this->monthChargeFor = $monthChargeFor;

        return $this;
    }

    /**
     * Get the value of standardCommission
     */ 
    public function getStandardCommission()
    {
        return $this->standardCommission;
    }

    /**
     * Set the value of standardCommission
     *
     * @return  self
     */ 
    public function setStandardCommission($standardCommission)
    {
        $this->standardCommission = $standardCommission;

        return $this;
    }

    /**
     * Get the value of recurringCommission
     */ 
    public function getRecurringCommission()
    {
        return $this->recurringCommission;
    }

    /**
     * Set the value of recurringCommission
     *
     * @return  self
     */ 
    public function setRecurringCommission($recurringCommission)
    {
        $this->recurringCommission = $recurringCommission;

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
}