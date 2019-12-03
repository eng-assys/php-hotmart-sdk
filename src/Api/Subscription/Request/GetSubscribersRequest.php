<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;
use Hotmart\Api\Common\ResultData;

use Hotmart\Api\Subscription\GetSubscribersRequestQuery;

use Hotmart\Request\RequestHelper;
/**
 * Class GetSubscribersRequest.
 *
 * Get the subscribers
 *
 * @package Hotmart\Api\Request\Subscription
 */
class GetSubscribersRequest extends AbstractRequest
{

    private $environment;

    private $page;

    private $rows;

    /**
     * GetSubscribersRequest constructor.
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
     * @param GetSubscribersRequestQuery
     *
     * @return ResultData<SubscriptionResponseVO>
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($getSubscribersRequestQuery)
    {

        $query = RequestHelper::generateUrlQueryString($getSubscribersRequestQuery->jsonSerialize());

        $url = "{$this->environment->getApiUrl()}subscriber/rest/v2$query";

        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return ResultData<SubscriptionResponseVO>
     */
    protected function unserialize($json)
    {
        return ResultData::fromJson($json);
    }

}
