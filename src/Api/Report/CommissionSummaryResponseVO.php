<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class CommissionSummaryResponseVO implements HotmartSerializable
{
    // integer
    private $totalItems;

    // CurrencyValueVO
    private $totalValue;

    /**
     * @param $json
     *
     * @return CommissionSummaryResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new CommissionSummaryResponseVO();
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