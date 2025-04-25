<?php

namespace Framework;

use App\Controllers\ErrorControler;
use Framework\Middleware\Authorize;

class Router
{
    protected $routes = [];

    /**
     * Add a new route
     *
     * @param string $method
     * @param string $uri
     * @param string $action
     * @param array $middleware
     * @return void
     */
    public function registerRoute($method, $uri, $action, $middleware = [])
    {
        list($controller, $controllerMethod) = explode("@", $action);

        $this->routes[] = [
            "method" => $method,
            "uri" => $uri,
            "controller" => $controller,
            "controllerMethod" => $controllerMethod,
            "middleware" => $middleware,
        ];
    }

    /**
     * Add a GET route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     * 
     */
    public function get($uri, $controller, $middleware = [])
    {
        $this->registerRoute("GET", $uri, $controller, $middleware);
    }

    /**
     * Add a POST route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     * 
     */
    public function post($uri, $controller, $middleware = [])
    {
        $this->registerRoute("POST", $uri, $controller, $middleware);
    }

    /**
     * Add a PUT route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     * 
     */
    public function put($uri, $controller, $middleware = [])
    {
        $this->registerRoute("PUT", $uri, $controller, $middleware);
    }

    /**
     * Add a DELETE route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     * 
     */
    public function delete($uri, $controller, $middleware = [])
    {
        $this->registerRoute("DELETE", $uri, $controller, $middleware);
    }

    /**
     * Route the Request
     * 
     * @param string $uri
     * @param string $method
     * @return void
     */
    public function route($uri)
    {
        $reqMethod = $_SERVER["REQUEST_METHOD"];

        // Check for _method input
        if ($reqMethod === "POST" && isset($_POST["_method"])) {
            // Override the reqMethod with the value of _method
            $reqMethod = strtoupper($_POST["_method"]);
        }

        foreach ($this->routes as $route) {
            // Split the current uri into segments
            $uriSegments = explode("/", trim($uri, "/"));
            // inspectAndDie($uriSegments[1]);

            // Split the route uri into segments
            $routeSegments = explode("/", trim($route["uri"], "/"));
            // inspect($routeSegments);

            $match = true;

            // Check if the number of segments matches
            if (
                count($uriSegments) === count($routeSegments) &&
                strtoupper($route["method"]) === $reqMethod
            ) {
                $params = [];

                $match = true;

                for ($i = 0; $i < count($uriSegments); $i++) {
                    // If the uri's do not match and there is no param
                    if (
                        $routeSegments[$i] !== $uriSegments[$i] &&
                        !preg_match("/\{(.+?)\}/", $routeSegments[$i])
                    ) {
                        $match = false;
                        break;
                    }

                    // Check for the param and add to $params array
                    if (preg_match("/\{(.+?)\}/", $routeSegments[$i], $matches)) {
                        $params[$matches[1]] = $uriSegments[$i];
                        // inspectAndDie($params);
                    }
                }

                if ($match) {
                    foreach ($route["middleware"] as $middleware) {
                        (new Authorize())->handle($middleware);
                    }

                    $controller = "App\\Controllers\\" . $route["controller"];
                    $controllerMethod = $route["controllerMethod"];

                    $controllerInstance = new $controller();
                    $controllerInstance->$controllerMethod($params);
                    return;
                }
            }
        }

        ErrorControler::notFound();
    }
}
