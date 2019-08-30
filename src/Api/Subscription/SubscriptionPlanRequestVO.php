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
     * @param \stdClass $data
     *
     * @return mixed
     */
    public function populate(\stdClass $data)
    {

    }

    /**
     * @param string $json
     *
     * @return mixed
     */
    public static function fromJson(string $json)
    {

    }
    
}