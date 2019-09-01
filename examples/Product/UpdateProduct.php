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
    $updateProduct = (new Hotmart($environment, $hotconnect))->updateProduct($productId, $productInfoRequestVO);

    print_r($updateProduct->jsonSerialize());
} catch (HotmartRequestException $e) {
    print_r($e);
}

