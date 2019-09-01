<?php

namespace Hotmart\Api\Report\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;
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
     * @param $sale
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($sale)
    {
        $url = $this->environment->getApiUrl() . 'reports/rest/v2/history';

        return $this->send($url, 'POST', $sale);
    }

    /**
     * @param $json
     *
     * @return Sale
     */
    protected function unserialize($json)
    {
        return Sale::fromJson($json);
    }
   
}
