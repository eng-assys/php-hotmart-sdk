<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class ENotasResponseVO implements HotmartSerializable
{
    // string
    private $pdf;

    // string
    private $xml;

    // string
    private $status;

    /**
     * @param $json
     *
     * @return ENotasResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new ENotasResponseVO();
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