<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class InstallmentPaymentRequestVO implements HotmartSerializable
{
    // string
    private $offerActivationCode;

    // string
    private $description;
    
    // string
    private $currencyCode;
    
    // double
    private $discountPercentage;
    
    // double
    private $discountValue;
    
    // array of integer
    private $plans;

    // integer
    private $numberOfRecurrences;

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