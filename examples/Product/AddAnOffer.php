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
    $addAnOffer = (new Hotmart($environment, $hotconnect))->addAnOffer($productId, $productPaymentRequestVO);

    print_r($addAnOffer->jsonSerialize());
} catch (HotmartRequestException $e) {
    print_r($e);
}

