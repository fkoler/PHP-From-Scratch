<?php

require __DIR__ . "/../vendor/autoload.php";
require "../helpers.php";

// spl_autoload_register(function ($class) {
//     $path = basePath("Framework/" .  $class . ".php");

//     if (file_exists($path)) {
//         require $path;
//     }
// });

// 1. Instatiate the router
$router = new Router();

// 2. Get routes
$routes = require basePath("routes.php");

// 3. Get current URI and HTTP method
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
// inspectAndDie($uri);
$method = $_SERVER["REQUEST_METHOD"];

// 4. Route the request
$router->route($uri, $method);
