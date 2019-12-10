<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;

class SubscriptionPurchaseResponseVO implements HotmartSerializable
{
    private $actions;

    private $id;

    private $status;

    private $transaction;

    private $paymentMethod;

    private $paymentEngine;

    private $paymentType;

    private $price;

    private $conversionRate;

    private $subscription;

    private $recurrencyNumber;

    private $underWarranty;

    private $orderLogInfo;

    private $purchaseSubscription;

    private $originalPrice;

    private $approvedDate;

    /**
     * @param $json
     *
     * @return SubscriptionPurchaseResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new SubscriptionPurchaseResponseVO();
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
     * Get the value of actions
     */ 
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Set the value of actions
     *
     * @return  self
     */ 
    public function setActions($actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

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
     * Get the value of transaction
     */ 
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set the value of transaction
     *
     * @return  self
     */ 
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get the value of paymentMethod
     */ 
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set the value of paymentMethod
     *
     * @return  self
     */ 
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get the value of paymentEngine
     */ 
    public function getPaymentEngine()
    {
        return $this->paymentEngine;
    }

    /**
     * Set the value of paymentEngine
     *
     * @return  self
     */ 
    public function setPaymentEngine($paymentEngine)
    {
        $this->paymentEngine = $paymentEngine;

        return $this;
    }

    /**
     * Get the value of paymentType
     */ 
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set the value of paymentType
     *
     * @return  self
     */ 
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

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
     * Get the value of conversionRate
     */ 
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Set the value of conversionRate
     *
     * @return  self
     */ 
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;

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
     * Get the value of recurrencyNumber
     */ 
    public function getRecurrencyNumber()
    {
        return $this->recurrencyNumber;
    }

    /**
     * Set the value of recurrencyNumber
     *
     * @return  self
     */ 
    public function setRecurrencyNumber($recurrencyNumber)
    {
        $this->recurrencyNumber = $recurrencyNumber;

        return $this;
    }

    /**
     * Get the value of underWarranty
     */ 
    public function getUnderWarranty()
    {
        return $this->underWarranty;
    }

    /**
     * Set the value of underWarranty
     *
     * @return  self
     */ 
    public function setUnderWarranty($underWarranty)
    {
        $this->underWarranty = $underWarranty;

        return $this;
    }

    /**
     * Get the value of orderLogInfo
     */ 
    public function getOrderLogInfo()
    {
        return $this->orderLogInfo;
    }

    /**
     * Set the value of orderLogInfo
     *
     * @return  self
     */ 
    public function setOrderLogInfo($orderLogInfo)
    {
        $this->orderLogInfo = $orderLogInfo;

        return $this;
    }

    /**
     * Get the value of purchaseSubscription
     */ 
    public function getPurchaseSubscription()
    {
        return $this->purchaseSubscription;
    }

    /**
     * Set the value of purchaseSubscription
     *
     * @return  self
     */ 
    public function setPurchaseSubscription($purchaseSubscription)
    {
        $this->purchaseSubscription = $purchaseSubscription;

        return $this;
    }

    /**
     * Get the value of originalPrice
     */ 
    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }

    /**
     * Set the value of originalPrice
     *
     * @return  self
     */ 
    public function setOriginalPrice($originalPrice)
    {
        $this->originalPrice = $originalPrice;

        return $this;
    }

    /**
     * Get the value of approvedDate
     */ 
    public function getApprovedDate()
    {
        return $this->approvedDate;
    }

    /**
     * Set the value of approvedDate
     *
     * @return  self
     */ 
    public function setApprovedDate($approvedDate)
    {
        $this->approvedDate = $approvedDate;

        return $this;
    }
}