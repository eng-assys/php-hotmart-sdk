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

    }
    
}