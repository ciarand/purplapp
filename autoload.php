<?php

if (!file_exists("./vendor/autoload.php")) {
    echo "It looks like composer hasn't been run yet. Try `composer install`";
}

require "vendor/autoload.php";
