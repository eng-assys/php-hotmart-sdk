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
     * @param $json
     *
     * @return DiscountCupomRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new DiscountCupomRequestVO();
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