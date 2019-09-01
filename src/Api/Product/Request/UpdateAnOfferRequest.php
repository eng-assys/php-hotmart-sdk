<?php

namespace Hotmart\Api\Product\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;
/**
 * Class UpdateAnOfferRequest
 *
 * @package Hotmart\Api\Request\Product
 */
class UpdateAnOfferRequest extends AbstractRequest
{
    private $environment;

    private $productId;

    private $offerId;

    /**
     * UpdateAnOfferRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     */
    public function __construct(Hotconnect $hotconnect, Environment $environment, $productId, $offerId)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;

        $this->productId = $productId;
        $this->offerId = $offerId;
    }

    /**
     * @param $productPaymentRequestVO
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($productPaymentRequestVO)
    {
        $url = "{$this->environment->getApiUrl()}product/rest/v2/{$this->productId}/offer/{$this->offerId}";

        return $this->send($url, 'PUT', $productPaymentRequestVO);
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
