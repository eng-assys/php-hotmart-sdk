<?php

namespace Hotmart\Api;

/**
 * Interface HotmartSerializable
 *
 * @package Hotmart\Api
 */
interface HotmartSerializable extends \JsonSerializable
{
    /**
     * @param \stdClass $data
     *
     * @return mixed
     */
    public function populate(\stdClass $data);

    /**
     * @param string $json
     *
     * @return mixed
     */
    public static function fromJson(string $json);

}
