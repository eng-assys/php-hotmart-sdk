<?php

namespace Hotmart\Api\Common;

use Hotmart\Api\HotmartSerializable;
class AddressResponseVO implements HotmartSerializable
{
    // string
    private $city;

    // string
    private $zipCode;

    // string
    private $state;

    // string
    private $address;

    // string
    private $complement;

    // string
    private $neighborhood;

    // string
    private $number;

    // string
    private $country;

   /**
     * @param $json
     *
     * @return AddressResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new AddressResponseVO();
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