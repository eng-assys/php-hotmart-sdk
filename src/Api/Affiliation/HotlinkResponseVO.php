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
     * @param $json
     *
     * @return HotlinkResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new HotlinkResponseVO();
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