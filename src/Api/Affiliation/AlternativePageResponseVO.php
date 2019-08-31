<?php

namespace Hotmart\Api\Affiliation;

use Hotmart\Api\HotmartSerializable;
class AlternativePageResponseVO implements HotmartSerializable
{
    // string
    private $url;

    // string
    private $oldHotLink;

    // string
    private $description;

    // ProductDetailedResponseVO
    private $product;

    // boolean
    private $isSpecialCampaign;

   /**
     * @param $json
     *
     * @return AlternativePageResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new AlternativePageResponseVO();
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