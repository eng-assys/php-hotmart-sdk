<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Subscription\SubscriptionStatusListResponseVO;


/**
 * Class ReactivateAListOfInactiveSubscriptionsRequest
 *
 * Reactivate a list of inactive subscription using list of subscription code as reference
 * 
 * @package Hotmart\Api\Request\Subscription
 */
class ReactivateAListOfInactiveSubscriptionsRequest extends AbstractRequest
{

    private $environment;

    /**
     * ReactivateAListOfInactiveSubscriptionsRequest constructor.
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
     * @param array $subscriptionsArray
     *
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     * 
     * @return SubscriptionStatusListResponseVO
     */
    public function execute($subscriptionsArray)
    {
        $url = "{$this->environment->getApiUrl()}subscription/rest/v2/reactivate/list";

        return $this->send($url, 'POST', $subscriptionsArray);
    }

    /**
     * @param $json
     *
     * @return SubscriptionStatusListResponseVO
     */
    protected function unserialize($json)
    {
        return SubscriptionStatusListResponseVO::fromJson($json);
    }
   
}
