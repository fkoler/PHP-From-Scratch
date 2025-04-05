<?php

class MathUtility
{
    public static $pi = 3.1416;

    public static function add(...$numbs)
    {
        return array_sum($numbs);
    }
}

// resolution operator
echo MathUtility::$pi . "<br>";
echo MathUtility::add(1, 3, 5, 7, 9) . "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Static Members & Methods</title>
</head>

<body class="bg-black text-white"></body>

</html>