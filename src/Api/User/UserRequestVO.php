<?php

namespace Hotmart\Api\User;

use Hotmart\Api\HotmartSerializable;
class UserRequestVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $email;

    // string
    private $password;

    /**
     * @param $json
     *
     * @return UserRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new UserRequestVO();
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