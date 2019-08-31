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
     * @param $json
     *
     * @return InstallmentPaymentRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new InstallmentPaymentRequestVO();
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