<?php

namespace Hotmart\Api\Affiliation;

use Hotmart\Api\HotmartSerializable;
class AffiliationCreationResponseVO implements HotmartSerializable
{
    // integer
    private $productId;

    // AffiliationResponseVO
    private $affiliation;

    // string
    private $errorCode;

    // string
    private $errorMessage;

    /**
     * @param $json
     *
     * @return AffiliationCreationResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new AffiliationCreationResponseVO();
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