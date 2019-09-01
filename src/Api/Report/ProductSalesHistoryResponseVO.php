<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class ProductSalesHistoryResponseVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $ucode;

    // boolean
    private $hasCoProduction;

    // boolean
    private $subscription;

    /**
     * @param $json
     *
     * @return ProductSalesHistoryResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new ProductSalesHistoryResponseVO();
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
     * Get the value of ucode
     */ 
    public function getUcode()
    {
        return $this->ucode;
    }

    /**
     * Set the value of ucode
     *
     * @return  self
     */ 
    public function setUcode($ucode)
    {
        $this->ucode = $ucode;

        return $this;
    }

    /**
     * Get the value of hasCoProduction
     */ 
    public function getHasCoProduction()
    {
        return $this->hasCoProduction;
    }

    /**
     * Set the value of hasCoProduction
     *
     * @return  self
     */ 
    public function setHasCoProduction($hasCoProduction)
    {
        $this->hasCoProduction = $hasCoProduction;

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
}