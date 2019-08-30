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