<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class OfferDetailedResponseVO implements HotmartSerializable
{
    // integer
    private $id;

    // integer
    private $productId;

    // double
    private $price;

    // boolean
    private $active;

    // boolean
    private $mainOffer;

    // boolean
    private $useExternalPage;

    // string
    private $installmentOption;

    // enum [ 'PAGAMENTO_UNICO', 'ASSINATURA', 'MULTIPLOS_PAGAMENTOS', 'PAGAMENTO_VISTA', 'INVOICE', 'SMART_INSTALLMENT' ]
    private $paymentMode;

    // boolean
    private $suboffer;

    // string
    private $currencyCode;

    // integer
    private $numberOfRecurrences;

    // string
    private $description;

    // string
    private $descriptionSummary;

    // string
    private $key;

    // integer
    private $discount;

    // boolean
    private $disableConversion;

    // boolean
    private $parentOffer;

    // boolean
    private $upgradeOffer;

   /**
     * @param $json
     *
     * @return OfferDetailedResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new OfferDetailedResponseVO();
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
     * Get the value of mainOffer
     */ 
    public function getMainOffer()
    {
        return $this->mainOffer;
    }

    /**
     * Set the value of mainOffer
     *
     * @return  self
     */ 
    public function setMainOffer($mainOffer)
    {
        $this->mainOffer = $mainOffer;

        return $this;
    }

    /**
     * Get the value of useExternalPage
     */ 
    public function getUseExternalPage()
    {
        return $this->useExternalPage;
    }

    /**
     * Set the value of useExternalPage
     *
     * @return  self
     */ 
    public function setUseExternalPage($useExternalPage)
    {
        $this->useExternalPage = $useExternalPage;

        return $this;
    }

    /**
     * Get the value of installmentOption
     */ 
    public function getInstallmentOption()
    {
        return $this->installmentOption;
    }

    /**
     * Set the value of installmentOption
     *
     * @return  self
     */ 
    public function setInstallmentOption($installmentOption)
    {
        $this->installmentOption = $installmentOption;

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
     * Get the value of suboffer
     */ 
    public function getSuboffer()
    {
        return $this->suboffer;
    }

    /**
     * Set the value of suboffer
     *
     * @return  self
     */ 
    public function setSuboffer($suboffer)
    {
        $this->suboffer = $suboffer;

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
     * Get the value of numberOfRecurrences
     */ 
    public function getNumberOfRecurrences()
    {
        return $this->numberOfRecurrences;
    }

    /**
     * Set the value of numberOfRecurrences
     *
     * @return  self
     */ 
    public function setNumberOfRecurrences($numberOfRecurrences)
    {
        $this->numberOfRecurrences = $numberOfRecurrences;

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
     * Get the value of descriptionSummary
     */ 
    public function getDescriptionSummary()
    {
        return $this->descriptionSummary;
    }

    /**
     * Set the value of descriptionSummary
     *
     * @return  self
     */ 
    public function setDescriptionSummary($descriptionSummary)
    {
        $this->descriptionSummary = $descriptionSummary;

        return $this;
    }

    /**
     * Get the value of key
     */ 
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set the value of key
     *
     * @return  self
     */ 
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get the value of disableConversion
     */ 
    public function getDisableConversion()
    {
        return $this->disableConversion;
    }

    /**
     * Set the value of disableConversion
     *
     * @return  self
     */ 
    public function setDisableConversion($disableConversion)
    {
        $this->disableConversion = $disableConversion;

        return $this;
    }

    /**
     * Get the value of parentOffer
     */ 
    public function getParentOffer()
    {
        return $this->parentOffer;
    }

    /**
     * Set the value of parentOffer
     *
     * @return  self
     */ 
    public function setParentOffer($parentOffer)
    {
        $this->parentOffer = $parentOffer;

        return $this;
    }

    /**
     * Get the value of upgradeOffer
     */ 
    public function getUpgradeOffer()
    {
        return $this->upgradeOffer;
    }

    /**
     * Set the value of upgradeOffer
     *
     * @return  self
     */ 
    public function setUpgradeOffer($upgradeOffer)
    {
        $this->upgradeOffer = $upgradeOffer;

        return $this;
    }
}