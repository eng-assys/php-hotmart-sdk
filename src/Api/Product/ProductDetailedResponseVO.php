<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class ProductDetailedResponseVO implements HotmartSerializable
{
    // integer
    private $id;

    // string
    private $name;

    // string
    private $description;

    // string
    private $contentLocale;

    // string
    private $affiliationType;

    // double
    private $bluePrintRating;

    // double
    private $temperature;

    // string
    private $urlCoverPhoto;

    // string
    private $ucode;

    // integer
    private $cookieType;

    // integer
    private $affiliationCookieDuration;

    // 	CurrencyValueVO
    private $price;

    // string
    private $distributionForm;

    // boolean
    private $approved;

    // boolean
    private $revised;

    // boolean
    private $enabled;

    // string
    private $paymentMode;

    // CategoryResponseVO
    private $category;

    // SubCategoryResponseVO
    private $subcategory;

    // boolean
    private $salesPageLink;

    // boolean
    private $status;

    // boolean
    private $widgetCheckoutCode;

   /**
     * @param $json
     *
     * @return ProductDetailedResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new ProductDetailedResponseVO();
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
     * Get the value of affiliationType
     */ 
    public function getAffiliationType()
    {
        return $this->affiliationType;
    }

    /**
     * Set the value of affiliationType
     *
     * @return  self
     */ 
    public function setAffiliationType($affiliationType)
    {
        $this->affiliationType = $affiliationType;

        return $this;
    }

    /**
     * Get the value of bluePrintRating
     */ 
    public function getBluePrintRating()
    {
        return $this->bluePrintRating;
    }

    /**
     * Set the value of bluePrintRating
     *
     * @return  self
     */ 
    public function setBluePrintRating($bluePrintRating)
    {
        $this->bluePrintRating = $bluePrintRating;

        return $this;
    }

    /**
     * Get the value of temperature
     */ 
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set the value of temperature
     *
     * @return  self
     */ 
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get the value of urlCoverPhoto
     */ 
    public function getUrlCoverPhoto()
    {
        return $this->urlCoverPhoto;
    }

    /**
     * Set the value of urlCoverPhoto
     *
     * @return  self
     */ 
    public function setUrlCoverPhoto($urlCoverPhoto)
    {
        $this->urlCoverPhoto = $urlCoverPhoto;

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
     * Get the value of cookieType
     */ 
    public function getCookieType()
    {
        return $this->cookieType;
    }

    /**
     * Set the value of cookieType
     *
     * @return  self
     */ 
    public function setCookieType($cookieType)
    {
        $this->cookieType = $cookieType;

        return $this;
    }

    /**
     * Get the value of affiliationCookieDuration
     */ 
    public function getAffiliationCookieDuration()
    {
        return $this->affiliationCookieDuration;
    }

    /**
     * Set the value of affiliationCookieDuration
     *
     * @return  self
     */ 
    public function setAffiliationCookieDuration($affiliationCookieDuration)
    {
        $this->affiliationCookieDuration = $affiliationCookieDuration;

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
     * Get the value of distributionForm
     */ 
    public function getDistributionForm()
    {
        return $this->distributionForm;
    }

    /**
     * Set the value of distributionForm
     *
     * @return  self
     */ 
    public function setDistributionForm($distributionForm)
    {
        $this->distributionForm = $distributionForm;

        return $this;
    }

    /**
     * Get the value of approved
     */ 
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set the value of approved
     *
     * @return  self
     */ 
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get the value of revised
     */ 
    public function getRevised()
    {
        return $this->revised;
    }

    /**
     * Set the value of revised
     *
     * @return  self
     */ 
    public function setRevised($revised)
    {
        $this->revised = $revised;

        return $this;
    }

    /**
     * Get the value of enabled
     */ 
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set the value of enabled
     *
     * @return  self
     */ 
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get the value of paymentMode
     */ 
    public function getPaymentMode()
    {
        return $this->paymentMode;
    }

    /**
     * Set the value of paymentMode
     *
     * @return  self
     */ 
    public function setPaymentMode($paymentMode)
    {
        $this->paymentMode = $paymentMode;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of subcategory
     */ 
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set the value of subcategory
     *
     * @return  self
     */ 
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get the value of salesPageLink
     */ 
    public function getSalesPageLink()
    {
        return $this->salesPageLink;
    }

    /**
     * Set the value of salesPageLink
     *
     * @return  self
     */ 
    public function setSalesPageLink($salesPageLink)
    {
        $this->salesPageLink = $salesPageLink;

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
     * Get the value of widgetCheckoutCode
     */ 
    public function getWidgetCheckoutCode()
    {
        return $this->widgetCheckoutCode;
    }

    /**
     * Set the value of widgetCheckoutCode
     *
     * @return  self
     */ 
    public function setWidgetCheckoutCode($widgetCheckoutCode)
    {
        $this->widgetCheckoutCode = $widgetCheckoutCode;

        return $this;
    }
}