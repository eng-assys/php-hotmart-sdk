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