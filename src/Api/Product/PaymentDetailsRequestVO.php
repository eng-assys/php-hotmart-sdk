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