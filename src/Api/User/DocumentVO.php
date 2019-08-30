<?php

namespace Hotmart\Api\User;

use Hotmart\Api\HotmartSerializable;
class DocumentVO implements HotmartSerializable
{
    // string
    private $value;

    // string
    private $type;

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