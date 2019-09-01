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
     * @param $json
     *
     * @return ENotasResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new ENotasResponseVO();
        $newObject->populate(json_decode($json)->body);

        return $newObject;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }

    /**
     * @param \stdClass $data
     *
     * @return mixed
     */
    public function populate(\stdClass $data)
    {
        foreach (get_object_vars($this) as $key => $value) {
            $this->{$key} = $data->{$key} ?? null;
        }
    }
    

    /**
     * Get the value of pdf
     */ 
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Set the value of pdf
     *
     * @return  self
     */ 
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }

    /**
     * Get the value of xml
     */ 
    public function getXml()
    {
        return $this->xml;
    }

    /**
     * Set the value of xml
     *
     * @return  self
     */ 
    public function setXml($xml)
    {
        $this->xml = $xml;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}