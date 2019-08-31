<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class ProductSalesHistoryResponseVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $ucode;

    // boolean
    private $hasCoProduction;

    // boolean
    private $subscription;

    /**
     * @param $json
     *
     * @return ProductSalesHistoryResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new ProductSalesHistoryResponseVO();
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