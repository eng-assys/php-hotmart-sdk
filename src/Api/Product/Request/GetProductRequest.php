<?php

namespace Hotmart\Api\Product\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Product\ProductDetailedResponseVO;

/**
 * Class GetProductRequest
 *
 * @package Hotmart\Api\Request\Product
 */
class GetProductRequest extends AbstractRequest
{
    private $environment;

    private $productId;

    /**
     * GetProductRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     */
    public function __construct(Hotconnect $hotconnect, Environment $environment, $productId)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;

        $this->productId = $productId;
    }

    /**
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param=null)
    {
        $url = "{$this->environment->getApiUrl()}product/rest/v2/{$this->productId}";

        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return ProductDetailedResponseVO
     */
    protected function unserialize($json)
    {
        return ProductDetailedResponseVO::fromJson($json);
    }
   
}
