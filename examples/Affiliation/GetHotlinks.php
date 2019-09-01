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
    $hotlinks = (new Hotmart($environment, $hotconnect))->getHotlinks();

    print_r($hotlinks->jsonSerialize());
} catch (HotmartRequestException $e) {
    print_r($e);
}

