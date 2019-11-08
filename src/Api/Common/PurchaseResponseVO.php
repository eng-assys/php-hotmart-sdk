<?php

namespace Hotmart\Api\Common;

use Hotmart\Api\HotmartSerializable;

class PurchaseResponseVO implements HotmartSerializable
{
    // string
    private $transaction;

    // string
    private $orderDate;

    // date
    private $approvedDate;

    // string
    private $paymentEngine;

    // string
    private $status;

    // CurrencyValueVO
    private $price;

    // string
    private $paymentType;

    // string
    private $paymentMethod;

    // integer
    private $recurrencyNumber;

    // integer
    private $warrantyRefund;

    // string
    private $externalCode;

    // string
    private $salesNature;

    // boolean
    private $underWarranty;

    // boolean
    private $purchaseSubscription;

    // integer
    private $installmentsNumber;

    /**
     * @param $json
     *
     * @return PurchaseResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new PurchaseResponseVO();
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
     * Get the value of orderDate
     */ 
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set the value of orderDate
     *
     * @return  self
     */ 
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

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
     * Get the value of warrantyRefund
     */ 
    public function getWarrantyRefund()
    {
        return $this->warrantyRefund;
    }

    /**
     * Set the value of warrantyRefund
     *
     * @return  self
     */ 
    public function setWarrantyRefund($warrantyRefund)
    {
        $this->warrantyRefund = $warrantyRefund;

        return $this;
    }

    /**
     * Get the value of externalCode
     */ 
    public function getExternalCode()
    {
        return $this->externalCode;
    }

    /**
     * Set the value of externalCode
     *
     * @return  self
     */ 
    public function setExternalCode($externalCode)
    {
        $this->externalCode = $externalCode;

        return $this;
    }

    /**
     * Get the value of salesNature
     */ 
    public function getSalesNature()
    {
        return $this->salesNature;
    }

    /**
     * Set the value of salesNature
     *
     * @return  self
     */ 
    public function setSalesNature($salesNature)
    {
        $this->salesNature = $salesNature;

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
     * Get the value of installmentsNumber
     */ 
    public function getInstallmentsNumber()
    {
        return $this->installmentsNumber;
    }

    /**
     * Set the value of installmentsNumber
     *
     * @return  self
     */ 
    public function setInstallmentsNumber($installmentsNumber)
    {
        $this->installmentsNumber = $installmentsNumber;

        return $this;
    }
}