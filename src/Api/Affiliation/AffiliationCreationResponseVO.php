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