<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Subscription\SubscriptionStatusListResponseVO;


/**
 * Class CancelAListOfActiveSubscriptionsRequest
 *
 * Cancel a list of active subscription using subscription code as reference
 * 
 * @package Hotmart\Api\Request\Subscription
 */
class CancelAListOfActiveSubscriptionsRequest extends AbstractRequest
{

    private $environment;

    private $sendEmail;

    /**
     * CancelAListOfActiveSubscriptionsRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     */
    public function __construct(Hotconnect $hotconnect, Environment $environment, $sendEmail)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;

        $this->sendEmail = $sendEmail;
    }

    /**
     * @param array $subscriptionsArray
     *
     * @return SubscriptionStatusListResponseVO
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($subscriptionsArray)
    {
        $queryParams = RequestHelper::generateUrlQueryString([
            'sendMail' => $this->sendEmail
        ]);

        $url = "{$this->environment->getApiUrl()}subscription/rest/v2/cancel/list$queryParams";

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
