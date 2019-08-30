<?php

namespace Hotmart\Api\SwitchPlan;

use Hotmart\Api\HotmartSerializable;
class SwitchPlanPlansRequest implements HotmartSerializable
{
    // long
    private $idProduct;

    // array of String
    private $listSubscriberCode;

    // array of String
    private $listOfferCode;

    // boolean
    private $onlyInfoPlans;

    // boolean
    private $onlyAvailableSwitchPlan;

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