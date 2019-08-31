<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class InstallmentPaymentRequestVO implements HotmartSerializable
{
    // string
    private $offerActivationCode;

    // string
    private $description;
    
    // string
    private $currencyCode;
    
    // double
    private $discountPercentage;
    
    // double
    private $discountValue;
    
    // array of integer
    private $plans;

    // integer
    private $numberOfRecurrences;

   /**
     * @param $json
     *
     * @return InstallmentPaymentRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new InstallmentPaymentRequestVO();
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
     * Get the value of offerActivationCode
     */ 
    public function getOfferActivationCode()
    {
        return $this->offerActivationCode;
    }

    /**
     * Set the value of offerActivationCode
     *
     * @return  self
     */ 
    public function setOfferActivationCode($offerActivationCode)
    {
        $this->offerActivationCode = $offerActivationCode;

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
     * Get the value of currencyCode
     */ 
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set the value of currencyCode
     *
     * @return  self
     */ 
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get the value of discountPercentage
     */ 
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Set the value of discountPercentage
     *
     * @return  self
     */ 
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Get the value of discountValue
     */ 
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * Set the value of discountValue
     *
     * @return  self
     */ 
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;

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

    /**
     * Get the value of numberOfRecurrences
     */ 
    public function getNumberOfRecurrences()
    {
        return $this->numberOfRecurrences;
    }

    /**
     * Set the value of numberOfRecurrences
     *
     * @return  self
     */ 
    public function setNumberOfRecurrences($numberOfRecurrences)
    {
        $this->numberOfRecurrences = $numberOfRecurrences;

        return $this;
    }
}