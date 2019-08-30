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
     * @param \stdClass $data
     *
     * @return mixed
     */
    public function populate(\stdClass $data)
    {

    }

    /**
     * @param string $json
     *
     * @return mixed
     */
    public static function fromJson(string $json)
    {

    }
    
}