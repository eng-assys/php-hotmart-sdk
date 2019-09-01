<?php

namespace Hotmart\Api\Product\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;
/**
 * Class UpdateProductRequest
 *
 * @package Hotmart\Api\Request\Product
 */
class UpdateProductRequest extends AbstractRequest
{
    private $environment;

    private $productId;

    /**
     * UpdateProductRequest constructor.
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
     * @param $productInfoRequestVO
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($productInfoRequestVO)
    {
        $url = "{$this->environment->getApiUrl()}product/rest/v2/{$this->productId}";

        return $this->send($url, 'PUT', $productInfoRequestVO);
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
