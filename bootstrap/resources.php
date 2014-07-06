<?php

$app->container->singleton("adn", function () use ($app) {
    return new EZAppDotNet(
        $app->config("adn.app.client_id"),
        $app->config("adn.app.client_secret")
    );
});
