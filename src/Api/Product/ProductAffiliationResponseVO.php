<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class ProductAffiliationResponseVO implements HotmartSerializable
{
    // integer
    private $affiliationId;
    // date
    private $affiliationDate;
    // AffiliateResponseVO
    private $affiliate;
    // ProductResponseVO
    private $product;
    // string
    private $reference;
    // integer
    private $sellerId;
    // string
    private $sellerName;
    // boolean
    private $watingAffiliationApprove;
    // boolean
    private $affiliatePercentageActive;
    // boolean
    private $owner;

   /**
     * @param $json
     *
     * @return ProductAffiliationResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new ProductAffiliationResponseVO();
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
     * Get the value of affiliationId
     */ 
    public function getAffiliationId()
    {
        return $this->affiliationId;
    }

    /**
     * Set the value of affiliationId
     *
     * @return  self
     */ 
    public function setAffiliationId($affiliationId)
    {
        $this->affiliationId = $affiliationId;

        return $this;
    }

    /**
     * Get the value of affiliationDate
     */ 
    public function getAffiliationDate()
    {
        return $this->affiliationDate;
    }

    /**
     * Set the value of affiliationDate
     *
     * @return  self
     */ 
    public function setAffiliationDate($affiliationDate)
    {
        $this->affiliationDate = $affiliationDate;

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
     * Get the value of reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of sellerId
     */ 
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * Set the value of sellerId
     *
     * @return  self
     */ 
    public function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;

        return $this;
    }

    /**
     * Get the value of sellerName
     */ 
    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * Set the value of sellerName
     *
     * @return  self
     */ 
    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;

        return $this;
    }

    /**
     * Get the value of watingAffiliationApprove
     */ 
    public function getWatingAffiliationApprove()
    {
        return $this->watingAffiliationApprove;
    }

    /**
     * Set the value of watingAffiliationApprove
     *
     * @return  self
     */ 
    public function setWatingAffiliationApprove($watingAffiliationApprove)
    {
        $this->watingAffiliationApprove = $watingAffiliationApprove;

        return $this;
    }

    /**
     * Get the value of affiliatePercentageActive
     */ 
    public function getAffiliatePercentageActive()
    {
        return $this->affiliatePercentageActive;
    }

    /**
     * Set the value of affiliatePercentageActive
     *
     * @return  self
     */ 
    public function setAffiliatePercentageActive($affiliatePercentageActive)
    {
        $this->affiliatePercentageActive = $affiliatePercentageActive;

        return $this;
    }

    /**
     * Get the value of owner
     */ 
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the value of owner
     *
     * @return  self
     */ 
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }
}