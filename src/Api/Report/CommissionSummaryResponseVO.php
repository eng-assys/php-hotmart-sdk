<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class CommissionSummaryResponseVO implements HotmartSerializable
{
    // integer
    private $totalItems;

    // CurrencyValueVO
    private $totalValue;

    /**
     * @param $json
     *
     * @return CommissionSummaryResponseVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new CommissionSummaryResponseVO();
        $newObject->populate($object);

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
     * Get the value of totalItems
     */ 
    public function getTotalItems()
    {
        return $this->totalItems;
    }

    /**
     * Set the value of totalItems
     *
     * @return  self
     */ 
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;

        return $this;
    }

    /**
     * Get the value of totalValue
     */ 
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /**
     * Set the value of totalValue
     *
     * @return  self
     */ 
    public function setTotalValue($totalValue)
    {
        $this->totalValue = $totalValue;

        return $this;
    }
}