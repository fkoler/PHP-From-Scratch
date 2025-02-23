<?php

$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(
    function ($number) {
        return $number ** 2;
    },
    $numbers
);

// print_r($squaredNumbers);

function applyCallback($cb, $val)
{
    return $cb($val);
}

$double = function ($num) {
    return $num * 2;
};

echo applyCallback($double, 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Callback Functions</title>
</head>

<body class="bg-black text-white"></body>

</html>