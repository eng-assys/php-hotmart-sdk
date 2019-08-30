<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class PurchaseDetailsResponseVO implements HotmartSerializable
{
    // CurrencyValueVO
    private $commission;

    // integer
    private $productId;

    // string
    private $productName;

    // string
    private $transaction;

    // date
    private $approvedDate;

    // date
    private $orderDate;

    // double
    private $conversionRate;

    // string
    private $currencyCodeFrom;

    // string
    private $currencyCodeTo;

    // double
    private $exchangeOrderRealConversionRate;

    // double
    private $originalPrice;

    // string
    private $paymentType;

    // CurrencyValueVO
    private $price;

    // CurrencyValueVO
    private $totalValue;

    // string
    private $salesNature;

    // string
    private $status;

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