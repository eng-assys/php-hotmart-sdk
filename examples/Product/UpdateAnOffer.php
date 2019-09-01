<?php
require '../../vendor/autoload.php';

include '../.env.php';

use Hotmart\Api\Environment;
use Hotmart\Api\Hotmart;
use Hotmart\HotConnect;

$environment = Environment::production();

$hotconnect = new HotConnect($envToken);

try {
    // Get The AccessToken to use HotConnect
    $updateAnOffer = (new Hotmart($environment, $hotconnect))->updateAnOffer($productId, $offerId, $productPaymentRequestVO);

    print_r($updateAnOffer->jsonSerialize());
} catch (HotmartRequestException $e) {
    print_r($e);
}

