<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class SalesHistoryResponseVO implements HotmartSerializable
{
    // ProductSalesHistoryResponseVO
    private $product;

    // ENotasResponseVO
    private $enotas;

    // UserResponseVO
    private $buyer;

    // AffiliationResponseVO
    private $affiliation;

    // UserResponseVO
    private $affiliate;

    // CurrencyValueVO
    private $commission;

    // PurchaseResponseVO
    private $purchase;

    // ouble
    private $total;

    // OfferResponseVO
    private $offer;

    // CurrencyValueVO
    private $affiliationCommissionRate;

    /**
     * @param $json
     *
     * @return SalesHistoryResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SalesHistoryResponseVO();
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
     * Get the value of enotas
     */ 
    public function getEnotas()
    {
        return $this->enotas;
    }

    /**
     * Set the value of enotas
     *
     * @return  self
     */ 
    public function setEnotas($enotas)
    {
        $this->enotas = $enotas;

        return $this;
    }

    /**
     * Get the value of buyer
     */ 
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Set the value of buyer
     *
     * @return  self
     */ 
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Get the value of affiliation
     */ 
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * Set the value of affiliation
     *
     * @return  self
     */ 
    public function setAffiliation($affiliation)
    {
        $this->affiliation = $affiliation;

        return $this;
    }

    /**
     * Get the value of affiliate
     */ 
    public function getAffiliate()
    {
        return $this->affiliate;
    }

    /**
     * Set the value of affiliate
     *
     * @return  self
     */ 
    public function setAffiliate($affiliate)
    {
        $this->affiliate = $affiliate;

        return $this;
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
     * Get the value of purchase
     */ 
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * Set the value of purchase
     *
     * @return  self
     */ 
    public function setPurchase($purchase)
    {
        $this->purchase = $purchase;

        return $this;
    }

    /**
     * Get the value of total
     */ 
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @return  self
     */ 
    public function setTotal($total)
    {
        $this->total = $total;

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
     * Get the value of affiliationCommissionRate
     */ 
    public function getAffiliationCommissionRate()
    {
        return $this->affiliationCommissionRate;
    }

    /**
     * Set the value of affiliationCommissionRate
     *
     * @return  self
     */ 
    public function setAffiliationCommissionRate($affiliationCommissionRate)
    {
        $this->affiliationCommissionRate = $affiliationCommissionRate;

        return $this;
    }
}