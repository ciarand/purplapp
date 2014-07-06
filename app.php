<?php require __DIR__ . "/autoload.php";

//TODO move to a separate file
if (file_exists(__DIR__ . "/.env.php")) {
    foreach (require __DIR__ . "/.env.php" as $key => $val) {
        $_ENV[$key] = $_SERVER[$key] = $val;

        putenv("{$key}={$val}");
    }
}

use Slim\Slim;

// instantiate a new application with the settings in config.php
$app = new Slim(require "./config.php");

require __DIR__ . "/bootstrap/hooks.php";
require __DIR__ . "/bootstrap/middleware.php";
require __DIR__ . "/bootstrap/resources.php";
require __DIR__ . "/bootstrap/routes.php";

return $app;
