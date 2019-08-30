<?php

namespace Hotmart\Api\User;

use Hotmart\Api\HotmartSerializable;
class UserBadgeResponseVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $summary;

    // string
    private $title;

    // string
    private $imageUrl;

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