<?php

// function add($a, $b)
// {
//     return $a + $b;
// }

// echo add(1, 2);

// $add =  fn($a, $b) => $a + $b;

// echo $add(1, 2);

$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(
    fn($number) => $number ** 2,
    $numbers
);

print_r($squaredNumbers);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Arrow Functions</title>
</head>

<body class="bg-black text-white"></body>

</html>