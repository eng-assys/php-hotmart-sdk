<?php

namespace Hotmart\Api\Product\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Product\CategoryResponseVO;

/**
 * Class GetAllCategoriesRequest
 *
 * @package Hotmart\Api\Request\Product
 */
class GetAllCategoriesRequest extends AbstractRequest
{
    private $environment;

    /**
     * GetAllCategoriesRequest constructor.
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
        $url = "{$this->environment->getApiUrl()}product/rest/v2/category";

        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return CategoryResponseVO
     */
    protected function unserialize($json)
    {
        return CategoryResponseVO::fromJson($json);
    }
   
}
