<?php
require '../../vendor/autoload.php';

include '../.env.php';

use Hotmart\Api\Environment;
use Hotmart\Api\Hotmart;
use Hotmart\HotConnect;

use Hotmart\Api\Affiliation\AffiliationListRequestVO;

$environment = Environment::production();

$hotconnect = new HotConnect($envToken);

$affiliationListRequestVO = new AffiliationListRequestVO();

try {
    // Get The AccessToken to use HotConnect
    $affiliationCreationResponseVO = (new Hotmart($environment, $hotconnect))->createListOfAffiliation($affiliationListRequestVO);

    print_r($affiliationCreationResponseVO->jsonSerialize());
} catch (HotmartRequestException $e) {
    print_r($e);
}

