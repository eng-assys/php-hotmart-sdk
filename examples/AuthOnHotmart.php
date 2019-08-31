<?php
require '../vendor/autoload.php';

include '.env.php';

use Hotmart\Auth\Environment;
use Hotmart\Auth\HotmartAuth;
use Hotmart\Auth\Auth;

$environment = Environment::production();

// Set Authentication Object
$auth = new Auth($envClientId, $envClientSecret);

try {
    // Get The AccessToken to use HotConnect
    $access_token = (new HotmartAuth($environment))->createAuthToken($auth);

    print_r($access_token);
} catch (HotmartRequestException $e) {
    print_r($e);
}

