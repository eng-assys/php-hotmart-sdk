<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class ENotasResponseVO implements HotmartSerializable
{
    // string
    private $pdf;

    // string
    private $xml;

    // string
    private $status;

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