<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;

class BuyerInfoResponseVO implements HotmartSerializable
{
    // string
    private $email;

    // string
    private $ddd;

    // string
    private $telephone;

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
     * @return BuyerInfoResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new BuyerInfoResponseVO();
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