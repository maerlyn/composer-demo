<?php

require_once __DIR__ . "/../vendor/.composer/autoload.php";

use Symfony\Component\Finder\Finder;
use Monolog\Logger;

new Finder();
new Logger("app");
