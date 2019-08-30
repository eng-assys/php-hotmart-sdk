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