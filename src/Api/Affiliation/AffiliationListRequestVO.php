<?php

namespace Hotmart\Api\Affiliation;

use Hotmart\Api\HotmartSerializable;

class AffiliationListRequestVO implements HotmartSerializable
{
    // array of integer
    private $productIds;
   
    /**
     * @param $json
     *
     * @return AffiliationListRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new AffiliationListRequestVO();
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