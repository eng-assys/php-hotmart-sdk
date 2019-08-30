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