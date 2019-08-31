<?php

namespace Hotmart\Api\User;

use Hotmart\Api\HotmartSerializable;
class DocumentVO implements HotmartSerializable
{
    // string
    private $value;

    // string
    private $type;

    /**
     * @param $json
     *
     * @return DocumentVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new DocumentVO();
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