<?php

// PHP DATA TYPES:

// - String
$name = "Ferenc";
$name2 = "Dalia";

var_dump($name);
echo "<br>", getType($name2), "<br>";

// - Integer
$age = 22;

var_dump($age);
echo "<br>";

// - Float
$rating = 9.94;

var_dump($rating);
echo "<br>";

// - Boolean
$isLoaded = true;

var_dump($isLoaded);
echo "<br>", getType($isLoaded), " ", $isLoaded, "<br>";

// - Array
$group = [
  "Rammstein",
  42,
  "Type O Negative",
  false,
  7.83
];

var_dump($group);
echo "<br>";

// - Object
$person = new stdClass();

var_dump($person);
echo "<br>";

// - NULL
$car = null;

var_dump($car);
echo "<br>";

// - Resource
$file = fopen("text.txt", "r");

var_dump($file);
