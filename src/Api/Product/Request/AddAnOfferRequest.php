<?php

namespace Hotmart\Api\Product\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;
/**
 * Class AddAnOfferRequest
 *
 * @package Hotmart\Api\Product\Request
 */
class AddAnOfferRequest extends AbstractRequest
{

    private $environment;

    private $productId;

    /**
     * AddAnOfferRequest constructor.
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
     * @param $productPaymentRequestVO
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($productPaymentRequestVO)
    {
        $url = "{$this->environment->getApiUrl()}product/rest/v2/{$this->productId}/offer";

        return $this->send($url, 'POST', $productPaymentRequestVO);
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
