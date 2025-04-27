<?php

// Home
$router->get("/", "HomeController@index");

// Listing
$router->get("/listings", "ListingController@index");
$router->get("/listings/create", "ListingController@create", ["auth"]);
$router->get("/listings/{id}", "ListingController@show");
$router->get("/listings/edit/{id}", "ListingController@edit", ["auth"]);

$router->post("/listings", "ListingController@store", ["auth"]);

$router->put("/listings/{id}", "ListingController@update", ["auth"]);

$router->delete("/listings/{id}", "ListingController@destroy", ["auth"]);

// User
$router->get("/auth/register", "UserController@create", ["guest"]);
$router->get("/auth/login", "UserController@login", ["guest"]);

$router->post("/auth/register", "UserController@store", ["guest"]);
$router->post("/auth/logout", "UserController@logout", ["auth"]);
$router->post("/auth/login", "UserController@authenticate", ["guest"]);
