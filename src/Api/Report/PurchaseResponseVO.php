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
     * @param $json
     *
     * @return PurchaseResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new PurchaseResponseVO();
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