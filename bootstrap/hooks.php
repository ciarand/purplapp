<?php

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
