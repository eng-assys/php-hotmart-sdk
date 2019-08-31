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

    }
    
}