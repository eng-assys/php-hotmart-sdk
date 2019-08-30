<?php

namespace Hotmart\Request;

/**
 * Class HotmartRequestException
 *
 * @package Hotmart\Request
 */
class HotmartRequestException extends \Exception
{

    private $hotmartError;

    /**
     * HotmartRequestException constructor.
     *
     * @param string $message
     * @param int    $code
     * @param null   $previous
     */
    public function __construct($message, $code, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return mixed
     */
    public function getHotmartError()
    {
        return $this->hotmartError;
    }

    /**
     * @param HotmartError $hotmartError
     *
     * @return $this
     */
    public function setHotmartError(HotmartError $hotmartError)
    {
        $this->hotmartError = $hotmartError;

        return $this;
    }
}
