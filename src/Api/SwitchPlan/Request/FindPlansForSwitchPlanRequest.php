<?php

namespace Hotmart\Api\SwitchPlan\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Subscription\Subscription;
/**
 * Class FindPlansForSwitchPlanRequest
 *
 * @package Hotmart\Api\Request\SwitchPlan
 */
class FindPlansForSwitchPlanRequest extends AbstractRequest
{

    private $environment;

    /**
     * FindPlansForSwitchPlanRequest constructor.
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
     * @param $switchPlanPlansRequest
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($switchPlanPlansRequest)
    {
        $url = $this->environment->getApiUrl() . 'switchPlan/rest/v2/plans';

        return $this->send($url, 'POST', $switchPlanPlansRequest);
    }

    /**
     * @param $json
     *
     * @return Subscription
     */
    protected function unserialize($json)
    {
        return Subscription::fromJson($json);
    }
   
}
