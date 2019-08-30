<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class CategoryResponseVO implements HotmartSerializable
{
    // string
    private $name;
    
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