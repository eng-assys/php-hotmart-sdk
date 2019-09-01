<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class PurchaseDetailsQuery implements HotmartSerializable
{
    // Long - Required	Start Date of Period (in milliseconds)
    private $startDate;

    // Long - Required	Start Date of Period (in milliseconds)
    private $endDate;

    // Array[String] - Required	Transaction Status [ 'STARTED', 'PROCESSING_TRANSACTION', 'COMPLETE', 'PRINTED_BILLET', 'WAITING_PAYMENT', 'APPROVED', 'UNDER_ANALISYS', 'CANCELLED', 'PROTESTED', 'REFUNDED', 'CHARGEBACK', 'BLOCKED', 'OVERDUEO', 'PRE_ORDER' ]
    private $transactionStatus;

    // Long - Optional	Id of the Product
    private $productId;

    // String - Optional	Buyer's Email
    private $buyerEmail;

    // String - Optional	Transaction code
    private $transaction;

    // Integer - Optional	Current page
    private $page;

    // Integer - Optional	Number of records per page
    private $rows;


    /**
     * @param $json
     *
     * @return PurchaseDetailsQuery
     */
    public static function fromJson($json)
    {

        $newObject = new PurchaseDetailsQuery();
        $newObject->populate(json_decode($json));

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
     * Get the value of startDate
     */ 
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set the value of startDate
     *
     * @return  self
     */ 
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get the value of endDate
     */ 
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the value of endDate
     *
     * @return  self
     */ 
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get the value of transactionStatus
     */ 
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }

    /**
     * Set the value of transactionStatus
     *
     * @return  self
     */ 
    public function setTransactionStatus($transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;

        return $this;
    }

    /**
     * Get the value of productId
     */ 
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     *
     * @return  self
     */ 
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get the value of buyerEmail
     */ 
    public function getBuyerEmail()
    {
        return $this->buyerEmail;
    }

    /**
     * Set the value of buyerEmail
     *
     * @return  self
     */ 
    public function setBuyerEmail($buyerEmail)
    {
        $this->buyerEmail = $buyerEmail;

        return $this;
    }

    /**
     * Get the value of transaction
     */ 
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set the value of transaction
     *
     * @return  self
     */ 
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get the value of page
     */ 
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set the value of page
     *
     * @return  self
     */ 
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get the value of rows
     */ 
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Set the value of rows
     *
     * @return  self
     */ 
    public function setRows($rows)
    {
        $this->rows = $rows;

        return $this;
    }
}