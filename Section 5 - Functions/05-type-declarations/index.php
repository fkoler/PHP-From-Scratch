<?php

declare(strict_types=1);

function getSum(int $a, int $b): int
{
    // return "Hi";
    return $a + $b;
}

// echo getSum(12, "21");
echo getSum(12, 21) . "<br>";

/*
function greeting(string $name): string
{
    return "Hello " . $name;
}

echo greeting("George");
*/

function greeting(string $name): void
{
    echo "Hello " . $name;
}

greeting("George");
?>

<!-- https://www.php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Optional Type Declarations</title>
</head>

<body class="bg-black text-white"></body>

</html>