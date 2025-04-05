<?php
function add($x = 1, $y = 1)
{
    return $x + $y;
};

echo add(1, 2) . "<br>";
echo add(100, 200) . "<br>";
echo add() . "<br>";

function sayMyName($name = "Neo")
{
    return "My name is " . $name;
};

echo sayMyName("Oracle") . "<br>";
echo sayMyName() . "<br>";

function addAll(...$numbers)
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    };

    return $total;
};

echo addAll(1, 2, 100, 200, 1000, 2000) . "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Parameters & Arguments</title>
</head>

<body class="bg-black text-white"></body>

</html>