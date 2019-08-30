<?php

namespace Hotmart\Api\User;

use Hotmart\Api\HotmartSerializable;
class UserResponseVO implements HotmartSerializable
{
    // string
    private $nome;

    // string
    private $email;

    // string
    private $login;

    // string
    private $ucode;

    // string
    private $dddPhone;

    // string
    private $phone;

    // AddressResponseVO
    private $address;

    // string
    private $entityType;

    // string
    private $locale;

    // string
    private $urlPhoto;

    // string
    private $currencyCodeComission;

    // string
    private $timeZone;

    // array of DocumentVO
    private $documents;

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