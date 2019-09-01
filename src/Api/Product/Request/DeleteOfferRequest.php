<?php

namespace Hotmart\Api\Product\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;
/**
 * Class DeleteOfferRequest
 *
 * @package Hotmart\Api\Request\Product
 */
class DeleteOfferRequest extends AbstractRequest
{
    private $environment;

    private $productId;

    private $offerId;

    /**
     * DeleteOfferRequest constructor.
     *
     * @param Hotconnect $hotconnect
     * @param Environment $environment
     * @param $productId
     * @param $offerId
     */
    public function __construct(Hotconnect $hotconnect, Environment $environment, $productId, $offerId)
    {
        parent::__construct($hotconnect);

        $this->environment = $environment;

        $this->productId = $productId;

        $this->offerId = $offerId;
    }

    /**
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($param = null)
    {
        $url = "{$this->environment->getApiUrl()}product/rest/v2/{$this->productId}/offer/{$this->offerId}";

        return $this->sendRequest('DELETE', $url);
    }

    /**
     * @param $json
     *
     * @return null
     */
    protected function unserialize($json)
    {
        // return json_decode($json);
        return null;
    }
   
}
