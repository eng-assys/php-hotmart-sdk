<?php

namespace Hotmart\Api\Affiliation\Request;

use Hotmart\Request\AbstractRequest;
use Hotmart\HotConnect;
use Hotmart\Api\Environment;

use Hotmart\Api\Affiliation\AffiliationCreationResponseVO;

/**
 * Class CreateListOfAffiliationRequest
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

        return $this->sendRequest('POST', $url, $affiliationListRequestVO);
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
