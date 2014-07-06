<?php

$app->get("/about", function () use ($app) {

    $app->render("about.twig", array(
        "alpha"   => $app->config("adn.alpha_domain"),
        "support" => $app->config("adn.support_email"),
        "github"  => $app->config("adn.github_url"),
        "app"     => $app,
        "adn"     => $app->adn,
    ));
});

$app->get("/login", function () use ($app) {
    if ($app->adn->getSession()) {
        return $app->redirect("/");
    }

    $app->render("login.twig");
});

$app->notFound(function () use ($app) {
    $app->render("404.twig");
});
