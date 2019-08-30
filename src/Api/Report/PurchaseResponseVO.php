<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class PurchaseResponseVO implements HotmartSerializable
{
    // string
    private $transaction;

    // string
    private $orderDate;

    // date
    private $approvedDate;

    // string
    private $paymentEngine;

    // string
    private $status;

    // CurrencyValueVO
    private $price;

    // string
    private $paymentType;

    // string
    private $paymentMethod;

    // integer
    private $recurrencyNumber;

    // integer
    private $warrantyRefund;

    // string
    private $externalCode;

    // string
    private $salesNature;

    // boolean
    private $underWarranty;

    // boolean
    private $purchaseSubscription;

    // integer
    private $installmentsNumber;

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