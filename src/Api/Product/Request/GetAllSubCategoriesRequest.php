<?php

namespace Hotmart\Api\Product\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Product\SubCategoryResponseVO;

/**
 * Class GetAllSubCategoriesRequest
 *
 * @package Hotmart\Api\Request\Product
 */
class GetAllSubCategoriesRequest extends AbstractRequest
{
    private $environment;

    /**
     * GetProductRequest constructor.
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
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param=null)
    {
        $url = "{$this->environment->getApiUrl()}product/rest/v2/subcategory";

        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return SubCategoryResponseVO
     */
    protected function unserialize($json)
    {
        return SubCategoryResponseVO::fromJson($json);
    }
   
}
