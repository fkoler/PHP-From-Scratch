<?php
/*
| Arithmetic Operators      |
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = null;

$num1 = 20;
$num2 = 10;

// Basic Math
$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

// Assigment Operator
$num3 = 30;
// $num3 = $num3 + $num2;
// $num3 += $num2;
// $num3 -= $num2;
// $num3 /= $num2;

// Built-in PHP Functions
// rand()

// $output = rand();
// $output = getrandmax();
// $output = rand(1, 10);

// round()
$output = round(2.49);

// ceil()
$output = ceil(2.49);

// floor()
$output = floor(2.49);

// sqrt()
$output = sqrt(49);

// pi()
$output = pi();

// abs()
$output = abs(-76.3);

// max()
$output = max(2, 3, -1, 2.4);
$output = max([2, 3, -1, 2.4]);

// min()
$output = min(2, 3, -1, 2.4);
$output = min([2, 3, -1, 2.4]);

// number_format()
$output = number_format(1234.5678, 2, ".", ",");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl"> <?= $output ?> </p>
    </div>
  </div>
</body>

</html>