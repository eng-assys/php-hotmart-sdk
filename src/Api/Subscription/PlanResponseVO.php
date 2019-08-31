<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;
class PlanResponseVO implements HotmartSerializable
{
    // string
    private $name;

    /**
     * @param $json
     *
     * @return PlanResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new PlanResponseVO();
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