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
    $deleteOffer = (new Hotmart($environment, $hotconnect))->deleteOffer($productId, $offerId);

    print_r($deleteOffer);
} catch (HotmartRequestException $e) {
    print_r($e);
}

