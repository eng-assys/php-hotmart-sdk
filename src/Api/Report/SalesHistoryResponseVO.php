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