<?php

$names = array("Till", "Paul", "Christoph",  "Richard", "Oliver", "Christian");
$numbers = [2, 1, 3, 6, 4, 5];

function inspect($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

// inspect($names);
// inspect($numbers);

// print_r($names);

// echo $names[1]; // Paul
// echo $numbers[3]; // 6

// - Add element to array
$numbers[] = 100;
$numbers[] = 110;

// Modify element from array
$numbers[3] = 200;

// Remove element from array
unset($numbers[3]);

// Reindex elements from array
$numbers = array_values($numbers);

inspect($numbers);

die();
?>

<h1>PHP From Scratch</h1>