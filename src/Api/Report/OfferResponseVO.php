<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class OfferResponseVO implements HotmartSerializable
{
    // string
    private $paymentMode;

    // string
    private $code;

    /**
     * @param $json
     *
     * @return OfferResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new OfferResponseVO();
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