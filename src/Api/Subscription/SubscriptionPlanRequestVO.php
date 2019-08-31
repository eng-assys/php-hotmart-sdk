<?php

namespace Hotmart\Api\Subscription;

use Hotmart\Api\HotmartSerializable;
class SubscriptionPlanRequestVO implements HotmartSerializable
{
    // string
    private $name;

    // string
    private $description;

    // 	CurrencyValueVO
    private $currencyValue;

    // 	enum [ 'MONTHLY', 'BIMONTHLY', 'QUARTERLY', 'BIANNUAL', 'WEEKLY', 'ANNUAL', 'SINGLE_INSTALLMENT' ]
    private $monthPeriodicity;

    // enum [ 'TWO_RECURRENCIES', 'THREE_RECURRENCIES', 'SIX_RECURRENCIES', 'EIGHT_RECURRENCIES', 'NINE_RECURRENCIES', 'TWELVE_RECURRENCIES', 'FIFTEEN_RECURRENCIES', 'EIGHTEEN_RECURRENCIES', 'TWENTY_FOUR_RECURRENCIES', 'UNTIL_CLIENT_CANCELATION' ]
    private $monthChargeFor;

    // double
    private $standardCommission;

    // double
    private $recurringCommission;

    // integer
    private $trialPeriod;

    /**
     * @param $json
     *
     * @return SubscriptionPlanRequestVO
     */
    public static function fromJson($json)
    {
        $object = json_decode($json);

        $newObject = new SubscriptionPlanRequestVO();
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

    }
    
}