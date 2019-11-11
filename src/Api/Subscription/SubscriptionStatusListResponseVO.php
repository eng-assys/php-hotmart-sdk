<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;

class SubscriptionStatusListResponseVO implements HotmartSerializable
{
    
    /**
     * @var array[SubscriptionStatusResponseVO]
     */
    private $successSubscriptions;
    
    /**
     * @var array[SubscriptionStatusResponseVO]
     */
    private $failSubscriptions;

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
     * Get subscription identification code
     *
     * @return  string
     */ 
    public function getSuccessSubscriptions()
    {
        return $this->successSubscriptions;
    }

    /**
     * Set subscription identification code
     *
     * @param  string  $successSubscriptions  Subscription identification code
     *
     * @return  self
     */ 
    public function setSuccessSubscriptions(string $successSubscriptions)
    {
        $this->successSubscriptions = $successSubscriptions;

        return $this;
    }

    /**
     * Get date of subscription creation
     *
     * @return  string|null
     */ 
    public function getFailSubscriptions()
    {
        return $this->failSubscriptions;
    }

    /**
     * Set date of subscription creation
     *
     * @param  string|null  $failSubscriptions  Date of subscription creation
     *
     * @return  self
     */ 
    public function setFailSubscriptions($failSubscriptions)
    {
        $this->failSubscriptions = $failSubscriptions;

        return $this;
    }
}