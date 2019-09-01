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
    $getProduct = (new Hotmart($environment, $hotconnect))->getProduct($envProductId);

    print_r($getProduct->jsonSerialize());
} catch (HotmartRequestException $e) {
    print_r($e);
}

