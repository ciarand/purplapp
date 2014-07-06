<?php

use Slim\Middleware\SessionCookie;

$app->add(new SessionCookie(array(
    "expires"     => "7 days",
    "path"        => "/",
    "domain"      => null,
    "secure"      => false,
    "httponly"    => false,
    "name"        => "AppDotNetPHPAccessToken",
    "secret"      => 'vG6Y3ykovD>MV8t$oATZ@HGLFdzPeLPRbfxzhG;hGesaAXWk{A',
    "cipher"      => MCRYPT_RIJNDAEL_256,
    "cipher_mode" => MCRYPT_MODE_CBC
)));
