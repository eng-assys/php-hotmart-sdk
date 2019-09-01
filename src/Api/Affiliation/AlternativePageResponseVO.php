<?php

namespace Hotmart\Api\Affiliation;

use Hotmart\Api\HotmartSerializable;
class AlternativePageResponseVO implements HotmartSerializable
{
    // string
    private $url;

    // string
    private $oldHotLink;

    // string
    private $description;

    // ProductDetailedResponseVO
    private $product;

    // boolean
    private $isSpecialCampaign;

   /**
     * @param $json
     *
     * @return AlternativePageResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new AlternativePageResponseVO();
        $newObject->populate(json_decode($json)->body);

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
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of oldHotLink
     */ 
    public function getOldHotLink()
    {
        return $this->oldHotLink;
    }

    /**
     * Set the value of oldHotLink
     *
     * @return  self
     */ 
    public function setOldHotLink($oldHotLink)
    {
        $this->oldHotLink = $oldHotLink;

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
     * Get the value of isSpecialCampaign
     */ 
    public function getIsSpecialCampaign()
    {
        return $this->isSpecialCampaign;
    }

    /**
     * Set the value of isSpecialCampaign
     *
     * @return  self
     */ 
    public function setIsSpecialCampaign($isSpecialCampaign)
    {
        $this->isSpecialCampaign = $isSpecialCampaign;

        return $this;
    }
}