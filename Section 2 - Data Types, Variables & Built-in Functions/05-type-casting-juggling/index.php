<?php

$number0 = 0;
$number1 = 5;
$number2 = 10;
$number3 = "23";
$car = "Trabant";
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Conversion
$result = $number1 + $number2;
$result = $number1 + $number3; // string to int
$result = $number3 + $number1; // string to int
$result = $number3 + $number3; // string to int

$result = $number1 . $number2; // int to string
$result = $number1 . $number3; // int to string

// $result = $car + $number2; // Fatal error
// $result = $car + $number3; // Fatal error

$result = $number1 + $bool1; // boolean to int
$result = $bool1 + $bool1; // boolean to int
$result = $bool1 + $bool2; // boolean to int

$result = $number1 + $null; // null to int (0)
$result = $null . $null; // null to string ("")

// Explicit Conversion
$result = (string) $number1;
$result = (int) $number3;
$result = (bool) $number2; // true
$result = (bool) $number0; // false
$result = (bool) $null; // false

var_dump($result);
