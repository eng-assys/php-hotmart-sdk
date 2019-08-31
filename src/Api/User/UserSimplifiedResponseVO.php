<?php

namespace Hotmart\Api\User;

use Hotmart\Api\HotmartSerializable;
class UserSimplifiedResponseVO implements HotmartSerializable
{
    // integer
    private $id;

    // string
    private $name;

    // array of UserBadgeResponseVO
    private $badges;

    /**
     * @param $json
     *
     * @return UserSimplifiedResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new UserSimplifiedResponseVO();
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