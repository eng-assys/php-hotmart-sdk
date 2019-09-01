<?php

namespace Hotmart\Api\Report\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Report\SalesHistoryResponse;
/**
 * Class GetSalesHistoryRequest
 *
 * @package Hotmart\Api\Request\Report
 */
class GetSalesHistoryRequest extends AbstractRequest
{
    private $environment;

    /**
     * GetSalesHistoryRequest constructor.
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
     * @param $salesHistoryQuery
     *
     * @return SalesHistoryResponse
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($salesHistoryQuery)
    {
        $url = $this->environment->getApiUrl() . 'reports/rest/v2/history';

        return $this->send($url, 'POST', $salesHistoryQuery);
    }

    /**
     * @param $json
     *
     * @return SalesHistoryResponse
     */
    protected function unserialize($json)
    {
        return SalesHistoryResponse::fromJson($json);
    }
   
}
