<?php

require "../helpers.php";
require basePath("Router.php");
require basePath("Database.php");

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
