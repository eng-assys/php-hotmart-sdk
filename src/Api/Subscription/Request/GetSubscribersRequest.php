<?php

namespace Hotmart\Api\Subscription\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;
/**
 * Class GetSubscribersRequest
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
    public function __construct(Hotconnect $hotconnect, Environment $environment, $page, $rows)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;

        $this->page = $page;

        $this->rows = $rows;
    }

    /**
     * @param ResultData<SubscriptionResponseVO>
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param=null)
    {
        $url = "{$this->environment->getApiUrl()}subscriber/rest/v2?page={$this->page}&rows={$this->rows}";

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
