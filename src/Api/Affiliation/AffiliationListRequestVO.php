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

        $newObject = new AffiliationListRequestVO();
        $newObject->populate(json_decode($json)->body);

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
        foreach (get_object_vars($this) as $key => $value) {
            $this->{$key} = $data->{$key} ?? null;
        }
    }
    

    /**
     * Get the value of productIds
     */ 
    public function getProductIds()
    {
        return $this->productIds;
    }

    /**
     * Set the value of productIds
     *
     * @return  self
     */ 
    public function setProductIds($productIds)
    {
        $this->productIds = $productIds;

        return $this;
    }
}