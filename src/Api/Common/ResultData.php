<?php

namespace Hotmart\Api\Common;

use Hotmart\Api\HotmartSerializable;
class ResultData implements HotmartSerializable
{
    // integer
    private $size;

    // mixed
    private $data;

   /**
     * @param $json
     *
     * @return ResultData
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new ResultData();
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