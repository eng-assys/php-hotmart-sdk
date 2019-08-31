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
     * @param $json
     *
     * @return UserResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new UserResponseVO();
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