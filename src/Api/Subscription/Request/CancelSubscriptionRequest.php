<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\Request\RequestHelper;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;
/**
 * Class CancelSubscriptionRequest
 * 
 * Cancel subscription of the given code
 *
 * @package Hotmart\Api\Request\Subscription
 */
class CancelSubscriptionRequest extends AbstractRequest
{

    private $environment;

    private $subscriptionCode;

    /**
     * CancelSubscriptionRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     */
    public function __construct(Hotconnect $hotconnect, Environment $environment, $subscriptionCode)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;

        $this->subscriptionCode = $subscriptionCode;
    }

    /**
     * @param null
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($sendMail=null)
    {
        $queryParams = RequestHelper::generateUrlQueryString([
            'sendMail' => $sendMail
        ]);

        $url = "{$this->environment->getApiUrl()}subscription/rest/v2/{$this->subscriptionCode}/cancel{$queryParams}";
        return $this->send($url, 'PUT');
    }

    /**
     * @param $json
     *
     * @return null
     */
    protected function unserialize($json)
    {
        return null;
    }
   
}
