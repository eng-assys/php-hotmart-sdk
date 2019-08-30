<?php

namespace Hotmart\Api\Common;

use Hotmart\Api\HotmartSerializable;
class CurrencyValueVO implements HotmartSerializable
{
    // double
    private $value;
    
    // string
    private $currencyCode;


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