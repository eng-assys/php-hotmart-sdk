<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class Offer implements HotmartSerializable
{
    // string
    private $key;
    
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