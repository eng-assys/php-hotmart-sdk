<?php

namespace Hotmart\Api\Common;

use Hotmart\Api\HotmartSerializable;
class CurrencyValueVO implements HotmartSerializable
{
    // double
    private $value;

    // string
    private $currencyCode;


   /**
     * @param $json
     *
     * @return CurrencyValueVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new CurrencyValueVO();
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
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

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
}