<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class OfferDetailedResponseVO implements HotmartSerializable
{
    // integer
    private $id;

    // integer
    private $productId;

    // double
    private $price;

    // boolean
    private $active;

    // boolean
    private $mainOffer;

    // boolean
    private $useExternalPage;

    // string
    private $installmentOption;

    // enum [ 'PAGAMENTO_UNICO', 'ASSINATURA', 'MULTIPLOS_PAGAMENTOS', 'PAGAMENTO_VISTA', 'INVOICE', 'SMART_INSTALLMENT' ]
    private $paymentMode;

    // boolean
    private $suboffer;

    // string
    private $currencyCode;

    // integer
    private $numberOfRecurrences;

    // string
    private $description;

    // string
    private $descriptionSummary;

    // string
    private $key;

    // integer
    private $discount;

    // boolean
    private $disableConversion;

    // boolean
    private $parentOffer;

    // boolean
    private $upgradeOffer;

   /**
     * @param $json
     *
     * @return OfferDetailedResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new OfferDetailedResponseVO();
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