<?php
// Anonymous Function
$square = function ($number) {
    return $number ** 2;
};

$x = 5;
echo "The square of {$x} is " . $square($x) . "<br>";

// Closure
function createCounter()
{
    $count = 0;

    $counter = function () use (&$count) {
        return ++$count;
    };

    return $counter;
}

$counter66 = createCounter();
echo $counter66() . "<br>";
echo $counter66() . "<br>";
echo $counter66() . "<br>";
echo $counter66() . "<br>";
echo $counter66() . "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Anonymous Functions & Closures</title>
</head>

<body class="bg-black text-white"></body>

</html>