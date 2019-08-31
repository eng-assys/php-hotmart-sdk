<?php

namespace Hotmart\Api\User;

use Hotmart\Api\HotmartSerializable;
class UserBadgeResponseVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $summary;

    // string
    private $title;

    // string
    private $imageUrl;

    /**
     * @param $json
     *
     * @return UserBadgeResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new UserBadgeResponseVO();
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