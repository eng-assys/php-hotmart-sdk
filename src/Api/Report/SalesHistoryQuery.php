<?php

namespace Hotmart\Api\Report;

use Hotmart\Api\HotmartSerializable;

class SalesHistoryQuery implements HotmartSerializable
{
    // Long - [Required] - Start Date of Period (in milliseconds)
    private $startDate;

    // Long - [Required] - End Date of Period (in milliseconds)
    private $endDate;

    // Long - [Optional] - Id of the Product
    private $productId;

    // String - [Optional] - How the result will be grouped. By buyer or by transaction [ 'BUYER', 'TRANSACTION' ]
    private $statusType;

    // String - [Optional] - Buyer's Email
    private $email;

    // String - [Optional] - Transaction code
    private $transaction;

    // Array[String] - [Optional] - Transaction Status [ 'APPROVED', 'BLOCKED', 'CANCELLED', 'CHARGEBACK', 'COMPLETE', 'OVERDUE', 'PRE_ORDER', 'PRINTED_BILLET', 'PROCESSING_TRANSACTION', 'PROTESTED', 'REFUNDED', 'STARTED', 'UNDER_ANALISYS', 'WAITING_PAYMENT' ]
    private $transactionStatus;

    // String - [Optional] - Buyer's Name
    private $buyerName;

    // String - [Optional] - Buyer's CPF or CNPJ
    private $cpf;

    // String - [Optional] - How the user acted in that purchase [ 'COPRODUCER', 'PRODUCER', 'AFFILIATE' ]
    private $salesNature;

    // String - [Optional] - Payment engine which processed the sale [ 'MOIP', 'PAGSEGURO', 'PAYPAL', 'BCASH', 'BILLING', 'PAYONEER', 'HOTMART', 'ELAVON', 'ADYEN', 'PAYPAL_INTERNATIONAL', 'HOTPAY', 'HOTPAY_INTERNATIONAL' ]
    private $paymentEngine;

    // Boolean - [Optional] - Show only sales in which the buyer didn't access the product yet
    private $showNotAccessed;

    // String - [Optional] - Sale's payment type [ 'BILLET', 'CREDIT_CARD', 'PAYPAL', 'DEBIT', 'BALANCE_HOTMART', 'INSTANT', 'ECHECK', 'CASH_PAYMENT' ]
    private $paymentType;

    // String - [Optional] - Source of the sale
    private $source;

    // String - [Optional] - Affiliate's name
    private $affiliateName;

    // String - [Optional] - Offer Key
    private $offerKey;

    // Array[String] - [Optional] - List of fields to order the result [ 'BUYER_NAME', 'AFFILIATE_NAME', 'REQUEST_DATE', 'APPROVAL_DATE', 'PRODUCT_NAME' ]
    private $orderBy;

    // String - [Optional] - Response Format [ 'JSON', 'CSV', 'XLS' ]
    private $format;

    // Integer - [Optional] - Current page
    private $page;

    // Integer - [Optional] - Number of records per page
    private $rows;

    /**
     * @param $json
     *
     * @return SalesHistoryQuery
     */
    public static function fromJson($json)
    {

        $newObject = new SalesHistoryQuery();
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
     * Get the value of statusType
     */ 
    public function getStatusType()
    {
        return $this->statusType;
    }

    /**
     * Set the value of statusType
     *
     * @return  self
     */ 
    public function setStatusType($statusType)
    {
        $this->statusType = $statusType;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

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
     * Get the value of buyerName
     */ 
    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * Set the value of buyerName
     *
     * @return  self
     */ 
    public function setBuyerName($buyerName)
    {
        $this->buyerName = $buyerName;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of salesNature
     */ 
    public function getSalesNature()
    {
        return $this->salesNature;
    }

    /**
     * Set the value of salesNature
     *
     * @return  self
     */ 
    public function setSalesNature($salesNature)
    {
        $this->salesNature = $salesNature;

        return $this;
    }

    /**
     * Get the value of paymentEngine
     */ 
    public function getPaymentEngine()
    {
        return $this->paymentEngine;
    }

    /**
     * Set the value of paymentEngine
     *
     * @return  self
     */ 
    public function setPaymentEngine($paymentEngine)
    {
        $this->paymentEngine = $paymentEngine;

        return $this;
    }

    /**
     * Get the value of showNotAccessed
     */ 
    public function getShowNotAccessed()
    {
        return $this->showNotAccessed;
    }

    /**
     * Set the value of showNotAccessed
     *
     * @return  self
     */ 
    public function setShowNotAccessed($showNotAccessed)
    {
        $this->showNotAccessed = $showNotAccessed;

        return $this;
    }

    /**
     * Get the value of paymentType
     */ 
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set the value of paymentType
     *
     * @return  self
     */ 
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get the value of source
     */ 
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set the value of source
     *
     * @return  self
     */ 
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get the value of affiliateName
     */ 
    public function getAffiliateName()
    {
        return $this->affiliateName;
    }

    /**
     * Set the value of affiliateName
     *
     * @return  self
     */ 
    public function setAffiliateName($affiliateName)
    {
        $this->affiliateName = $affiliateName;

        return $this;
    }

    /**
     * Get the value of offerKey
     */ 
    public function getOfferKey()
    {
        return $this->offerKey;
    }

    /**
     * Set the value of offerKey
     *
     * @return  self
     */ 
    public function setOfferKey($offerKey)
    {
        $this->offerKey = $offerKey;

        return $this;
    }

    /**
     * Get the value of orderBy
     */ 
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * Set the value of orderBy
     *
     * @return  self
     */ 
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * Get the value of format
     */ 
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set the value of format
     *
     * @return  self
     */ 
    public function setFormat($format)
    {
        $this->format = $format;

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