<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class PurchaseDetailsResponseVO implements HotmartSerializable
{
    // CurrencyValueVO
    private $commission;

    // integer
    private $productId;

    // string
    private $productName;

    // string
    private $transaction;

    // date
    private $approvedDate;

    // date
    private $orderDate;

    // double
    private $conversionRate;

    // string
    private $currencyCodeFrom;

    // string
    private $currencyCodeTo;

    // double
    private $exchangeOrderRealConversionRate;

    // double
    private $originalPrice;

    // string
    private $paymentType;

    // CurrencyValueVO
    private $price;

    // CurrencyValueVO
    private $totalValue;

    // string
    private $salesNature;

    // string
    private $status;

    /**
     * @param $json
     *
     * @return PurchaseDetailsResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new PurchaseDetailsResponseVO();
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
     * Get the value of commission
     */ 
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set the value of commission
     *
     * @return  self
     */ 
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get the value of productId
     */ 
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     *
     * @return  self
     */ 
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get the value of productName
     */ 
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setProductName($productName)
    {
        $this->productName = $productName;

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
     * Get the value of currencyCodeFrom
     */ 
    public function getCurrencyCodeFrom()
    {
        return $this->currencyCodeFrom;
    }

    /**
     * Set the value of currencyCodeFrom
     *
     * @return  self
     */ 
    public function setCurrencyCodeFrom($currencyCodeFrom)
    {
        $this->currencyCodeFrom = $currencyCodeFrom;

        return $this;
    }

    /**
     * Get the value of currencyCodeTo
     */ 
    public function getCurrencyCodeTo()
    {
        return $this->currencyCodeTo;
    }

    /**
     * Set the value of currencyCodeTo
     *
     * @return  self
     */ 
    public function setCurrencyCodeTo($currencyCodeTo)
    {
        $this->currencyCodeTo = $currencyCodeTo;

        return $this;
    }

    /**
     * Get the value of exchangeOrderRealConversionRate
     */ 
    public function getExchangeOrderRealConversionRate()
    {
        return $this->exchangeOrderRealConversionRate;
    }

    /**
     * Set the value of exchangeOrderRealConversionRate
     *
     * @return  self
     */ 
    public function setExchangeOrderRealConversionRate($exchangeOrderRealConversionRate)
    {
        $this->exchangeOrderRealConversionRate = $exchangeOrderRealConversionRate;

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
     * Get the value of totalValue
     */ 
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /**
     * Set the value of totalValue
     *
     * @return  self
     */ 
    public function setTotalValue($totalValue)
    {
        $this->totalValue = $totalValue;

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
}