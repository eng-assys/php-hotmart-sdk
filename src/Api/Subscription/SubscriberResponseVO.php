<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;
class SubscriberResponseVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $email;

    // string
    private $dddPhone;

    // string
    private $phone;

    // string
    private $dddCell;

    // string
    private $cell;

    // string
    private $ucode;

    // AddressResponseVO
    private $address;

    /**
     * @param $json
     *
     * @return SubscriberResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SubscriberResponseVO();
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