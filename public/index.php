<?php

if (php_sapi_name() === 'cli-server') {
    $file = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);

    if (is_file($file)) {
        return false;
    }
}

$app = require __DIR__.'/../app.php';
$app->run();
