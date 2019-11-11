<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;

class SubscriptionStatusListResponseVO implements HotmartSerializable
{
    
    /**
     * Subscription identification code
     * @var string
     */
    private $subscriberCode;
    
    /**
     * Date of subscription creation
     * @var string|null
     */
    private $creationDate;
    
    /**
     * Current recurrence number of 'maxChargeCycles'
     * @var integer|null
     */
    private $currentRecurrence;
    
    /**
     * Date of last billing payment
     * @var string|null
     */
    private $dateLastRecurrence;
    
    /**
     * Schedule date of next billing.
     * @var string|null
     */
    private $dateNextCharge;
    
    /**
     * Reference day for due charges. For monthly or yearly subscriptions means month day, however weekly subscriptions this field means the day of the week [1-Monday, 2-Tuesday, 3-Wednesday, 4-Thursday, 5-Friday, 6-Saturday, 7-Sunday].
     * @var integer|null
     */
    private $dueDay;
    
    /**
     * Number of days for trial subscription period.
     * @var integer|null
     */
    private $daysToStartSubscription;
    
    /**
     * Type of subscription's charge ['DAY', 'WEEK', 'MONTH', 'INVOICE'].
     * @var string|null
     */
    private $intervalTypeBetweenCharges;

    /**
     * Number of days for trial subscription period.
     * @var string|null
     * 
     */
    private $maxChargeCycles;

    /**
     * Current status of subscription ['ACTIVE', 'INACTIVE']
     * @var string|null
     */
    private $status;

    
    /**
     * Date of subscription activation.
     * @var string|null
     */
    private $activationDate;

    /**
     * Shopper register email address.
     * @var string|null
     */
    private $emailShopper;

    /**
     * Shopper register phone number.
     * @var string|null
     */
    private $phoneShopper;
    
    /**
     * Reference error got when process subscription list. This tag will be only showed if got some error on process subscription.
     * 
     * @var string|null
     */
    private $error;

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
    

    
}