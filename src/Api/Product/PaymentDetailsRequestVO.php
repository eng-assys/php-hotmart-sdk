<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class PaymentDetailsRequestVO implements HotmartSerializable
{
    // string
    private $description;

    // string
    private $offerActivationCode;

    // integer
    private $serialLotId;

    // integer
    private $nextOfferId;

    // integer
    private $numberOfRecurrences;

    // double
    private $discountPercentage;

    // double
    private $discountValue;

    // CurrencyValueVO
    private $currencyValue;

    // 	array of boolean
    private $activeInstallments;

    // 	array of SubscriptionPlanRequestVO
    private $plans;

    // array of InstallmentPaymentRequestVO
    private $installments;
    
   /**
     * @param $json
     *
     * @return PaymentDetailsRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new PaymentDetailsRequestVO();
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