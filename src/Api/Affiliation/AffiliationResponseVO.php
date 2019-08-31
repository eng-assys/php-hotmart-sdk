<?php

namespace Hotmart\Api\Affiliation;

use Hotmart\Api\HotmartSerializable;
class AffiliationResponseVO implements HotmartSerializable
{
    // integer
    private $affiliation;

    // AffiliationResponseVO
    private $product;

    // boolean
    private $active;

    // array of HotlinkResponseVO
    private $hotlinks;

    // array of HotlinkResponseVO
    private $oldHotLinks;

    /**
     * @param $json
     *
     * @return AffiliationResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new AffiliationResponseVO();
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