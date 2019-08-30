<?php

namespace Hotmart\Api\Affiliation;

use Hotmart\Api\HotmartSerializable;
class HotlinkResponseVO implements HotmartSerializable
{
    // string
    private $salesPage;

    // string
    private $widgetCheckoutCode;

    // string
    private $customizedCheckout;

    // string
    private $customizedCheckoutNew;

    // string
    private $recruitment;

    // array of AlternativePageResponseVO
    private $alternativePages;


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