<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class SalesHistoryResponseVO implements HotmartSerializable
{
    // ProductSalesHistoryResponseVO
    private $product;

    // ENotasResponseVO
    private $enotas;

    // UserResponseVO
    private $buyer;

    // AffiliationResponseVO
    private $affiliation;

    // UserResponseVO
    private $affiliate;

    // CurrencyValueVO
    private $commission;

    // PurchaseResponseVO
    private $purchase;

    // ouble
    private $total;

    // OfferResponseVO
    private $offer;

    // CurrencyValueVO
    private $affiliationCommissionRate;

    /**
     * @param $json
     *
     * @return SalesHistoryResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SalesHistoryResponseVO();
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