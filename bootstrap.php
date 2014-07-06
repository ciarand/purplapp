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

// a really simple hook that just makes sure we still honor ".php" URLs
$app->hook("slim.before.router", function () use ($app) {
    $env = $app->environment;

    // if the last 4 characters are ".php"
    if (substr($env["SCRIPT_NAME"], -4, 4) === ".php") {
        // change the PATH_INFO key (which is what the router checks) to the
        // path without the .php extension (so minus the last 4 chars)
        $env["PATH_INFO"] = substr($env["SCRIPT_NAME"], 0, -4);
    }
});

$app->map("/about", function () use ($app) {
    $adn = new EZAppDotNet(
        $app->config("adn.app.client_id"),
        $app->config("adn.app.client_secret")
    );

    $app->render("about.twig", array(
        "alpha"   => $app->config("adn.alpha_domain"),
        "support" => $app->config("adn.support_email"),
        "github"  => $app->config("adn.github_url"),
        "app"     => $app,
        "adn"     => $adn,
    ));
})->via("GET", "POST");

return $app;
