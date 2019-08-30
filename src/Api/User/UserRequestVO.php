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