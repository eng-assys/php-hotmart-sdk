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
    $getSalesHistory = (new Hotmart($environment, $hotconnect))->getSalesHistory($salesHistoryRequest);

    print_r($getSalesHistory->jsonSerialize());
} catch (HotmartRequestException $e) {
    print_r($e);
}

