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
     * @param \stdClass $data
     *
     * @return mixed
     */
    public function populate(\stdClass $data)
    {

    }

    /**
     * @param string $json
     *
     * @return mixed
     */
    public static function fromJson(string $json)
    {

    }
    
}