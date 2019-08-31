<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;
class DiscountCupomRequestVO implements HotmartSerializable
{
    // string
    private $offerActivationCode;
    
    // string
    private $description;

    // string
    private $currencyCode;

    // integer
    private $discountPercentage;

   /**
     * @param $json
     *
     * @return DiscountCupomRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new DiscountCupomRequestVO();
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
}