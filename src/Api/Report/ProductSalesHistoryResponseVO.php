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