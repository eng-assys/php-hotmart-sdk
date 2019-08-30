<?php

namespace Hotmart\Api\Product;

use Hotmart\Api\HotmartSerializable;

class ProductDetailedResponseVO implements HotmartSerializable
{
    // integer
    private $id;

    // string
    private $name;

    // string
    private $description;

    // string
    private $contentLocale;

    // string
    private $affiliationType;

    // double
    private $bluePrintRating;

    // double
    private $temperature;

    // string
    private $urlCoverPhoto;

    // string
    private $ucode;

    // integer
    private $cookieType;

    // integer
    private $affiliationCookieDuration;

    // 	CurrencyValueVO
    private $price;

    // string
    private $distributionForm;

    // boolean
    private $approved;

    // boolean
    private $revised;

    // boolean
    private $enabled;

    // string
    private $paymentMode;

    // CategoryResponseVO
    private $category;

    // SubCategoryResponseVO
    private $subcategory;

    // boolean
    private $salesPageLink;

    // boolean
    private $status;

    // boolean
    private $widgetCheckoutCode;

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