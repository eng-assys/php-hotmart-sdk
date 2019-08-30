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