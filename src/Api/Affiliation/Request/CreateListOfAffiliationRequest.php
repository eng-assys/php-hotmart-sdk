<?php

namespace Hotmart\Api\Affiliation\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Affiliation\AffiliationCreationResponseVO;

/**
 * Class CreateListOfAffiliationRequest
 *
 * Create affiliations for a list of given products.
 * If the product has open affiliation, it's created.
 * If the product has an affiliation program which needs approval, a request will be created.
 * If the product doesn't allow affiliation, an error will be occur.
 * 
 * @package Hotmart\Api\Request\Affiliation
 */
class CreateListOfAffiliationRequest extends AbstractRequest
{

    private $environment;

    /**
     * CreateListOfAffiliationRequest constructor.
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
     * @param $affiliationListRequestVO
     *
     * @return null
     * @throws \Hotmart\Request\HotmartRequestException
     * @throws \RuntimeException
     */
    public function execute($affiliationListRequestVO)
    {
        $url = $this->environment->getApiUrl() . '/affiliation/rest/v2/list';

        return $this->send($url, 'POST', $affiliationListRequestVO);
    }

    /**
     * @param $json
     *
     * @return AffiliationCreationResponseVO
     */
    protected function unserialize($json)
    {
        return AffiliationCreationResponseVO::fromJson($json);
    }
   
}
