<?php

namespace Hotmart\Api\Affiliation;

use Hotmart\Api\HotmartSerializable;

class AffiliationListRequestVO implements HotmartSerializable
{
    // array of integer
    private $productIds;
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