<?php

namespace Hotmart\Api\SwitchPlan\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\SwitchPlan\SendInviteSwitchPlanResponse;
/**
 * Class AuthorizeSwitchPlanBatchRequest
 *
 * @package Hotmart\Api\Request\SwitchPlan
 */
class AuthorizeSwitchPlanBatchRequest extends AbstractRequest
{

    private $environment;

    /**
     * AuthorizeSwitchPlanBatchRequest constructor.
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
     * @param $switchPlanAuthoriseRequest
     *
     * @return SendInviteSwitchPlanResponse
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($switchPlanAuthoriseRequest)
    {
        $url = $this->environment->getApiUrl() . '/switchPlan/rest/v2/authoriseBatch';

        return $this->send($url, 'POST', $switchPlanAuthoriseRequest);
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
