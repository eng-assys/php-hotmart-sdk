<?php

namespace Hotmart\Api\SwitchPlan;

use Hotmart\Api\HotmartSerializable;
class SendInviteSwitchPlanResponse implements HotmartSerializable
{
    // long
    private $idProduct;

    // array of String
    private $listSubscriberCode;

    // array of String
    private $listOfferCode;

    // boolean
    private $onlyAvailableSwitchPlan;
   
    /**
     * @param $json
     *
     * @return SendInviteSwitchPlanResponse
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SendInviteSwitchPlanResponse();
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
        foreach (get_object_vars($this) as $key => $value) {
            $this->{$key} = $data->{$key} ?? null;
        }
    }

    /**
     * Get the value of idProduct
     */ 
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set the value of idProduct
     *
     * @return  self
     */ 
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get the value of listSubscriberCode
     */ 
    public function getListSubscriberCode()
    {
        return $this->listSubscriberCode;
    }

    /**
     * Set the value of listSubscriberCode
     *
     * @return  self
     */ 
    public function setListSubscriberCode($listSubscriberCode)
    {
        $this->listSubscriberCode = $listSubscriberCode;

        return $this;
    }

    /**
     * Get the value of listOfferCode
     */ 
    public function getListOfferCode()
    {
        return $this->listOfferCode;
    }

    /**
     * Set the value of listOfferCode
     *
     * @return  self
     */ 
    public function setListOfferCode($listOfferCode)
    {
        $this->listOfferCode = $listOfferCode;

        return $this;
    }

    /**
     * Get the value of onlyAvailableSwitchPlan
     */ 
    public function getOnlyAvailableSwitchPlan()
    {
        return $this->onlyAvailableSwitchPlan;
    }

    /**
     * Set the value of onlyAvailableSwitchPlan
     *
     * @return  self
     */ 
    public function setOnlyAvailableSwitchPlan($onlyAvailableSwitchPlan)
    {
        $this->onlyAvailableSwitchPlan = $onlyAvailableSwitchPlan;

        return $this;
    }
}