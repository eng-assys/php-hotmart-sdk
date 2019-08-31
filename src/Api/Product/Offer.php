<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class Offer implements HotmartSerializable
{
    // string
    private $key;

   /**
     * @param $json
     *
     * @return Offer
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new Offer();
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
}