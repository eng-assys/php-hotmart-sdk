<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class ProductInfoRequestVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $description;

    // string
    private $targetCountry;

    // string
    private $contentLocale;

    // string
    private $emailSupport;

    // integer
    private $categoryId;

    // integer
    private $subcategoryId;

   /**
     * @param $json
     *
     * @return ProductInfoRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new ProductInfoRequestVO();
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