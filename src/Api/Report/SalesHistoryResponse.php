<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class SalesHistoryResponse implements HotmartSerializable
{
    // array of CommissionSummaryResponseVO
    private $summary;

    // integer
    private $size;

    // array of SalesHistoryResponseVO
    private $data;

    /**
     * @param $json
     *
     * @return SalesHistoryResponse
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SalesHistoryResponse();
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