<?php

require __DIR__ . "/../vendor/autoload.php";

use Framework\Router;
use Framework\Session;

Session::startSession();

require "../helpers.php";

// inspectAndDie(session_status());

// 1. Instatiate the router
$router = new Router();

// 2. Get routes
$routes = require basePath("routes.php");

// 3. Get current URI and HTTP method
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// 4. Route the request
$router->route($uri);
