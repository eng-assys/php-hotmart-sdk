<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;
class DiscountCupomRequestVO implements HotmartSerializable
{
    // string
    private $offerActivationCode;
    
    // string
    private $description;

    // string
    private $currencyCode;

    // integer
    private $discountPercentage;

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