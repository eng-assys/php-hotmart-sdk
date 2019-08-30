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