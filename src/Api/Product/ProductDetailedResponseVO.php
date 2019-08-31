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
     * @param $json
     *
     * @return ProductDetailedResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new ProductDetailedResponseVO();
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