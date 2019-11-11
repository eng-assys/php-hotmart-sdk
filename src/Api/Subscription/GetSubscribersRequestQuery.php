<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;
class GetSubscribersRequestQuery implements HotmartSerializable
{
    /**
     * Current page
     * @var integer|null
     */
    private $page;

    /**
     * Number of records per page
     * @var integer|null
     */
    private $rows;

    /**
     * Product number reference
     * @var long|null
     */
    private $productId;

    /**
     * Plan name
     * @var string|null
     */
    private $plan;

    /**
     * Start accession range date of subscription. Date must be in milliseconds from 1970-01-01 00:00:00 UTC
     * @var long|null
     */
    private $accessionDate;

    /**
     * End accession range date of subscription. Date must be in milliseconds from 1970-01-01 00:00:00 UTC
     * @var long|null
     */
    private $endAccessionDate;

    /**
     * Subscription status. Possible values: [ 'ACTIVE', 'INACTIVE', 'DELAYED', 'CANCELLED_BY_CUSTOMER', 'CANCELLED_BY_SELLER', 'CANCELLED_BY_ADMIN', 'OVERDUE', 'STARTED' ]
     * @var string|array[string]|null
     */
    private $status;

    /**
     * Subscriber code reference
     * @var string|null
     */
    private $subscriberCode;

    /**
     * Subscriber name
     * @var string|null
     */
    private $subscriberName;

    /**
     * Subscriber email
     * @var string|null
     */
    private $subscriberEmail;

    /**
     * Subscriber CPF document
     * @var string|null
     */
    private $subscriberCpf;

    /**
     * Transaction reference code
     * @var string|null
     */
    private $transaction;

    /**
     * Trial type. Optional
     * @var boolean|null
     */
    private $trial;	

    /**
     * @param $json
     *
     * @return SubscriptionResponseVO
     */
    public static function fromJson($json)
    {

        $newObject = new SubscriptionResponseVO();
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
     * Get current page
     *
     * @return  integer|null
     */ 
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set current page
     *
     * @param  integer|null  $page  Current page
     *
     * @return  self
     */ 
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get number of records per page
     *
     * @return  integer|null
     */ 
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Set number of records per page
     *
     * @param  integer|null  $rows  Number of records per page
     *
     * @return  self
     */ 
    public function setRows($rows)
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * Get product number reference
     *
     * @return  long|null
     */ 
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set product number reference
     *
     * @param  long|null  $productId  Product number reference
     *
     * @return  self
     */ 
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get plan name
     *
     * @return  string|null
     */ 
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set plan name
     *
     * @param  string|null  $plan  Plan name
     *
     * @return  self
     */ 
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get start accession range date of subscription. Date must be in milliseconds from 1970-01-01 00:00:00 UTC
     *
     * @return  long|null
     */ 
    public function getAccessionDate()
    {
        return $this->accessionDate;
    }

    /**
     * Set start accession range date of subscription. Date must be in milliseconds from 1970-01-01 00:00:00 UTC
     *
     * @param  long|null  $accessionDate  Start accession range date of subscription. Date must be in milliseconds from 1970-01-01 00:00:00 UTC
     *
     * @return  self
     */ 
    public function setAccessionDate($accessionDate)
    {
        $this->accessionDate = $accessionDate;

        return $this;
    }

    /**
     * Get end accession range date of subscription. Date must be in milliseconds from 1970-01-01 00:00:00 UTC
     *
     * @return  long|null
     */ 
    public function getEndAccessionDate()
    {
        return $this->endAccessionDate;
    }

    /**
     * Set end accession range date of subscription. Date must be in milliseconds from 1970-01-01 00:00:00 UTC
     *
     * @param  long|null  $endAccessionDate  End accession range date of subscription. Date must be in milliseconds from 1970-01-01 00:00:00 UTC
     *
     * @return  self
     */ 
    public function setEndAccessionDate($endAccessionDate)
    {
        $this->endAccessionDate = $endAccessionDate;

        return $this;
    }

    /**
     * Get subscription status. Possible values: [ 'ACTIVE', 'INACTIVE', 'DELAYED', 'CANCELLED_BY_CUSTOMER', 'CANCELLED_BY_SELLER', 'CANCELLED_BY_ADMIN', 'OVERDUE', 'STARTED' ]
     *
     * @return  string|array[string]|null
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set subscription status. Possible values: [ 'ACTIVE', 'INACTIVE', 'DELAYED', 'CANCELLED_BY_CUSTOMER', 'CANCELLED_BY_SELLER', 'CANCELLED_BY_ADMIN', 'OVERDUE', 'STARTED' ]
     *
     * @param  string|array[string]|null  $status  Subscription status. Possible values: [ 'ACTIVE', 'INACTIVE', 'DELAYED', 'CANCELLED_BY_CUSTOMER', 'CANCELLED_BY_SELLER', 'CANCELLED_BY_ADMIN', 'OVERDUE', 'STARTED' ]
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get subscriber code reference
     *
     * @return  string|null
     */ 
    public function getSubscriberCode()
    {
        return $this->subscriberCode;
    }

    /**
     * Set subscriber code reference
     *
     * @param  string|null  $subscriberCode  Subscriber code reference
     *
     * @return  self
     */ 
    public function setSubscriberCode($subscriberCode)
    {
        $this->subscriberCode = $subscriberCode;

        return $this;
    }

    /**
     * Get subscriber name
     *
     * @return  string|null
     */ 
    public function getSubscriberName()
    {
        return $this->subscriberName;
    }

    /**
     * Set subscriber name
     *
     * @param  string|null  $subscriberName  Subscriber name
     *
     * @return  self
     */ 
    public function setSubscriberName($subscriberName)
    {
        $this->subscriberName = $subscriberName;

        return $this;
    }

    /**
     * Get subscriber email
     *
     * @return  string|null
     */ 
    public function getSubscriberEmail()
    {
        return $this->subscriberEmail;
    }

    /**
     * Set subscriber email
     *
     * @param  string|null  $subscriberEmail  Subscriber email
     *
     * @return  self
     */ 
    public function setSubscriberEmail($subscriberEmail)
    {
        $this->subscriberEmail = $subscriberEmail;

        return $this;
    }

    /**
     * Get subscriber CPF document
     *
     * @return  string|null
     */ 
    public function getSubscriberCpf()
    {
        return $this->subscriberCpf;
    }

    /**
     * Set subscriber CPF document
     *
     * @param  string|null  $subscriberCpf  Subscriber CPF document
     *
     * @return  self
     */ 
    public function setSubscriberCpf($subscriberCpf)
    {
        $this->subscriberCpf = $subscriberCpf;

        return $this;
    }

    /**
     * Get transaction reference code
     *
     * @return  string|null
     */ 
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set transaction reference code
     *
     * @param  string|null  $transaction  Transaction reference code
     *
     * @return  self
     */ 
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get trial type. Optional
     *
     * @return  boolean|null
     */ 
    public function getTrial()
    {
        return $this->trial;
    }

    /**
     * Set trial type. Optional
     *
     * @param  boolean|null  $trial  Trial type. Optional
     *
     * @return  self
     */ 
    public function setTrial($trial)
    {
        $this->trial = $trial;

        return $this;
    }
}