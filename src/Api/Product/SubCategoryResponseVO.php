<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class SubCategoryResponseVO implements HotmartSerializable
{
    // string
    private $name;

   /**
     * @param $json
     *
     * @return SubCategoryResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SubCategoryResponseVO();
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