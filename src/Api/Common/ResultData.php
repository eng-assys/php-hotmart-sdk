<?php

namespace Hotmart\Api\Common;

use Hotmart\Api\HotmartSerializable;
class ResultData implements HotmartSerializable
{
    // integer
    private $size;

    // mixed
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