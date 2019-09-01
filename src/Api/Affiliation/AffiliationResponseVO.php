<?php

namespace Hotmart\Api\Affiliation;

use Hotmart\Api\HotmartSerializable;
class AffiliationResponseVO implements HotmartSerializable
{
    // integer
    private $affiliation;

    // AffiliationResponseVO
    private $product;

    // boolean
    private $active;

    // array of HotlinkResponseVO
    private $hotlinks;

    // array of HotlinkResponseVO
    private $oldHotLinks;

    /**
     * @param $json
     *
     * @return AffiliationResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new AffiliationResponseVO();
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
     * Get the value of active
     */ 
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @return  self
     */ 
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get the value of hotlinks
     */ 
    public function getHotlinks()
    {
        return $this->hotlinks;
    }

    /**
     * Set the value of hotlinks
     *
     * @return  self
     */ 
    public function setHotlinks($hotlinks)
    {
        $this->hotlinks = $hotlinks;

        return $this;
    }

    /**
     * Get the value of oldHotLinks
     */ 
    public function getOldHotLinks()
    {
        return $this->oldHotLinks;
    }

    /**
     * Set the value of oldHotLinks
     *
     * @return  self
     */ 
    public function setOldHotLinks($oldHotLinks)
    {
        $this->oldHotLinks = $oldHotLinks;

        return $this;
    }
}