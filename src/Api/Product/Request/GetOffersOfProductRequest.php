<?php

namespace Hotmart\Api\Product\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Common\ResultData;
/**
 * Class GetOffersOfProductRequest
 *
 * @package Hotmart\Api\Request\Product
 */
class GetOffersOfProductRequest extends AbstractRequest
{
    private $environment;

    /**
     * GetOffersOfProductRequest constructor.
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
     * @return ResultData<OfferDetailedResponseVO>
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param = null)
    {
        $url = "{$this->environment->getApiUrl()}product/rest/v2/{$this->productId}/offers/";
        return $this->send($url, 'GET');
    }

    /**
     * @param $json
     *
     * @return ResultData<OfferDetailedResponseVO>
     */
    protected function unserialize($json)
    {
        return ResultData::fromJson($json);
    }
   
}
