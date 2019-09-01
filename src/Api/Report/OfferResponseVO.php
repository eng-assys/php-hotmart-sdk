<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class OfferResponseVO implements HotmartSerializable
{
    // string
    private $paymentMode;

    // string
    private $code;

    /**
     * @param $json
     *
     * @return OfferResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new OfferResponseVO();
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
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}