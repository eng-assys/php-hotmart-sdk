<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;
class Recurrency implements HotmartSerializable
{
    // integer
    private $recurrencyNumber;

    /**
     * @param $json
     *
     * @return Recurrency
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new Recurrency();
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
     * Get the value of recurrencyNumber
     */ 
    public function getRecurrencyNumber()
    {
        return $this->recurrencyNumber;
    }

    /**
     * Set the value of recurrencyNumber
     *
     * @return  self
     */ 
    public function setRecurrencyNumber($recurrencyNumber)
    {
        $this->recurrencyNumber = $recurrencyNumber;

        return $this;
    }
}