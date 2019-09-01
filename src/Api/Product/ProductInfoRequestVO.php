<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class ProductInfoRequestVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $description;

    // string
    private $targetCountry;

    // string
    private $contentLocale;

    // string
    private $emailSupport;

    // integer
    private $categoryId;

    // integer
    private $subcategoryId;

   /**
     * @param $json
     *
     * @return ProductInfoRequestVO
     */
    public static function fromJson($json)
    {

        $newObject = new ProductInfoRequestVO();
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
     * Get the value of targetCountry
     */ 
    public function getTargetCountry()
    {
        return $this->targetCountry;
    }

    /**
     * Set the value of targetCountry
     *
     * @return  self
     */ 
    public function setTargetCountry($targetCountry)
    {
        $this->targetCountry = $targetCountry;

        return $this;
    }

    /**
     * Get the value of contentLocale
     */ 
    public function getContentLocale()
    {
        return $this->contentLocale;
    }

    /**
     * Set the value of contentLocale
     *
     * @return  self
     */ 
    public function setContentLocale($contentLocale)
    {
        $this->contentLocale = $contentLocale;

        return $this;
    }

    /**
     * Get the value of emailSupport
     */ 
    public function getEmailSupport()
    {
        return $this->emailSupport;
    }

    /**
     * Set the value of emailSupport
     *
     * @return  self
     */ 
    public function setEmailSupport($emailSupport)
    {
        $this->emailSupport = $emailSupport;

        return $this;
    }

    /**
     * Get the value of categoryId
     */ 
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set the value of categoryId
     *
     * @return  self
     */ 
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get the value of subcategoryId
     */ 
    public function getSubcategoryId()
    {
        return $this->subcategoryId;
    }

    /**
     * Set the value of subcategoryId
     *
     * @return  self
     */ 
    public function setSubcategoryId($subcategoryId)
    {
        $this->subcategoryId = $subcategoryId;

        return $this;
    }
}