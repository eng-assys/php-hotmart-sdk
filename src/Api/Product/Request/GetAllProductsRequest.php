<?php

namespace Hotmart\Api\Product\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\Request\RequestHelper;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Product\ProductAffiliationResponseVO;

/**
 * Class GetAllProductsRequest
 *
 * @package Hotmart\Api\Request\Product
 */
class GetAllProductsRequest extends AbstractRequest
{
    private $environment;

    private $queryParams;

    /**
     * GetAllProductsRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     */
    public function __construct(
        Hotconnect $hotconnect,
        Environment $environment,
        $name = null,
        $categoryId = null,
        $subcategoryId = null,
        $page = null,
        $rows = null
    ) {
        parent::__construct($hotconnect);

        $this->environment = $environment;

        $this->queryParams = [
            'name' => $name,
            'categoryId' => $categoryId,
            'subcategoryId' => $subcategoryId,
            'page' => $page,
            'rows' => $rows
        ];
    }

    /**
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param = null)
    {
        $queryString = RequestHelper::generateUrlQueryString($this->queryParams);
        $url = "{$this->environment->getApiUrl()}product/rest/v2{$queryString}";

        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return ResultData<ProductAffiliationResponseVO>
     */
    protected function unserialize($json)
    {
        return ResultData::fromJson($json);
    }
}
