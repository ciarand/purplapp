<?php

// return an array of config details
return array(
    "debug"                 => true,

    "templates.path"        => __DIR__ . "/views",

    // ADN_PHP settings
    "adn.app.client_id"     => getenv("PURPLAPP_CLIENT_ID"),
    "adn.app.client_secret" => getenv("APRPLAPP_CLIENT_SECRET"),

    "adn.app.redirect_uri"  => "http://localhost:4000/ADN_php/callback.php",
    "adn.alpha_domain"      => "[ALPHA_CLIENT_DOMAIN]",
    "adn.support_email"     => "[SUPPORT_EMAIL]",
    "adn.github_url"        => "[GITHUB_URL]",
);
