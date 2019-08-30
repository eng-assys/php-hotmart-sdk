<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class OfferResponseVO implements HotmartSerializable
{
    // string
    private $paymentMode;

    // string
    private $code;

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