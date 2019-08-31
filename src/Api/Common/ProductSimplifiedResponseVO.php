<?php

namespace Hotmart\Api\Common;

use Hotmart\Api\HotmartSerializable;
class ProductSimplifiedResponseVO implements HotmartSerializable
{
    // integer
    private $id;

    // string
    private $name;

    // string
    private $ucode;
    
   /**
     * @param $json
     *
     * @return ProductSimplifiedResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new ProductSimplifiedResponseVO();
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