<?php
require '../../vendor/autoload.php';

include '../.env.php';

use Hotmart\Auth\Environment;
use Hotmart\Auth\HotmartAuth;
use Hotmart\Auth\Auth;

$environment = Environment::production();

// Set Authentication Object
$auth = new Auth($envClientId, $envClientSecret);

try {
    // Get The AccessToken to use HotConnect
    $accessToken = (new HotmartAuth($environment))->getAccessToken($auth);

    print_r($accessToken->jsonSerialize());
} catch (HotmartRequestException $e) {
    print_r($e);
}

