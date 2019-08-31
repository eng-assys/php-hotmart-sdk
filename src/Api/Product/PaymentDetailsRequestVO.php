<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class PaymentDetailsRequestVO implements HotmartSerializable
{
    // string
    private $description;

    // string
    private $offerActivationCode;

    // integer
    private $serialLotId;

    // integer
    private $nextOfferId;

    // integer
    private $numberOfRecurrences;

    // double
    private $discountPercentage;

    // double
    private $discountValue;

    // CurrencyValueVO
    private $currencyValue;

    // 	array of boolean
    private $activeInstallments;

    // 	array of SubscriptionPlanRequestVO
    private $plans;

    // array of InstallmentPaymentRequestVO
    private $installments;
    
   /**
     * @param $json
     *
     * @return PaymentDetailsRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new PaymentDetailsRequestVO();
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
     * Get the value of serialLotId
     */ 
    public function getSerialLotId()
    {
        return $this->serialLotId;
    }

    /**
     * Set the value of serialLotId
     *
     * @return  self
     */ 
    public function setSerialLotId($serialLotId)
    {
        $this->serialLotId = $serialLotId;

        return $this;
    }

    /**
     * Get the value of nextOfferId
     */ 
    public function getNextOfferId()
    {
        return $this->nextOfferId;
    }

    /**
     * Set the value of nextOfferId
     *
     * @return  self
     */ 
    public function setNextOfferId($nextOfferId)
    {
        $this->nextOfferId = $nextOfferId;

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
     * Get the value of activeInstallments
     */ 
    public function getActiveInstallments()
    {
        return $this->activeInstallments;
    }

    /**
     * Set the value of activeInstallments
     *
     * @return  self
     */ 
    public function setActiveInstallments($activeInstallments)
    {
        $this->activeInstallments = $activeInstallments;

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
     * Get the value of installments
     */ 
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * Set the value of installments
     *
     * @return  self
     */ 
    public function setInstallments($installments)
    {
        $this->installments = $installments;

        return $this;
    }
}