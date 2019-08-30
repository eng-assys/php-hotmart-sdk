<?php

namespace Hotmart\Api\SwitchPlan;

use Hotmart\Api\HotmartSerializable;
class InfoInviteSwitchPlan implements HotmartSerializable
{
    // Long
    private $idSwitchPlanSolicitation;

    // Subscription
    private $subscription;

    // enum [ 'ALL_SENT', 'PARTIALLY_SENT', 'NONE_SENT', 'ERROR' ]
    private $statusInviteSwitchPlan;

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