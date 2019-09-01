<?php

namespace Hotmart\Api\SwitchPlan\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\SwitchPlan\SendInviteSwitchPlanResponse;
/**
 * Class SendInviteForSwitchPlanRequest
 *
 * @package Hotmart\Api\Request\SwitchPlan
 */
class SendInviteForSwitchPlanRequest extends AbstractRequest
{

    private $environment;

    /**
     * SendInviteForSwitchPlanRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     */
    public function __construct(Hotconnect $hotconnect, Environment $environment)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;
    }

    /**
     * @param $sendInviteSwitchPlanRequest
     *
     * @return SendInviteSwitchPlanResponse
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($sendInviteSwitchPlanRequest)
    {
        $url = $this->environment->getApiUrl() . 'switchPlan/rest/v2/sendInvite';

        return $this->send($url, 'POST', $sendInviteSwitchPlanRequest);
    }

    /**
     * @param $json
     *
     * @return SendInviteSwitchPlanResponse
     */
    protected function unserialize($json)
    {
        return SendInviteSwitchPlanResponse::fromJson($json);
    }
   
}
