<?php

namespace Hotmart\Api\Affiliation;

use Hotmart\Api\HotmartSerializable;
class HotlinkResponseVO implements HotmartSerializable
{
    // string
    private $salesPage;

    // string
    private $widgetCheckoutCode;

    // string
    private $customizedCheckout;

    // string
    private $customizedCheckoutNew;

    // string
    private $recruitment;

    // array of AlternativePageResponseVO
    private $alternativePages;


   /**
     * @param $json
     *
     * @return HotlinkResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new HotlinkResponseVO();
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
     * Get the value of salesPage
     */ 
    public function getSalesPage()
    {
        return $this->salesPage;
    }

    /**
     * Set the value of salesPage
     *
     * @return  self
     */ 
    public function setSalesPage($salesPage)
    {
        $this->salesPage = $salesPage;

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

    /**
     * Get the value of customizedCheckout
     */ 
    public function getCustomizedCheckout()
    {
        return $this->customizedCheckout;
    }

    /**
     * Set the value of customizedCheckout
     *
     * @return  self
     */ 
    public function setCustomizedCheckout($customizedCheckout)
    {
        $this->customizedCheckout = $customizedCheckout;

        return $this;
    }

    /**
     * Get the value of customizedCheckoutNew
     */ 
    public function getCustomizedCheckoutNew()
    {
        return $this->customizedCheckoutNew;
    }

    /**
     * Set the value of customizedCheckoutNew
     *
     * @return  self
     */ 
    public function setCustomizedCheckoutNew($customizedCheckoutNew)
    {
        $this->customizedCheckoutNew = $customizedCheckoutNew;

        return $this;
    }

    /**
     * Get the value of recruitment
     */ 
    public function getRecruitment()
    {
        return $this->recruitment;
    }

    /**
     * Set the value of recruitment
     *
     * @return  self
     */ 
    public function setRecruitment($recruitment)
    {
        $this->recruitment = $recruitment;

        return $this;
    }

    /**
     * Get the value of alternativePages
     */ 
    public function getAlternativePages()
    {
        return $this->alternativePages;
    }

    /**
     * Set the value of alternativePages
     *
     * @return  self
     */ 
    public function setAlternativePages($alternativePages)
    {
        $this->alternativePages = $alternativePages;

        return $this;
    }
}