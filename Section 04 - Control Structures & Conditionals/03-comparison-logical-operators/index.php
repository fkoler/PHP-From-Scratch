<?php
/*
| Comparison Operators
| Operator | Description              |
| -------- | ------------------------ |
| ==       | Equal to                 |
| ===      | Identical to             |
| !=       | Not equal to             |
| <>       | Not equal to             |
| !==      | Not identical to         |
| <        | Less than                |
| >        | Greater than             |
| <=       | Less than or equal to    |
| >=       | Greater than or equal to |
*/

$x = 10;
$y = "10";

/*
| Logical Operators
| Operator | Description            |
| -------- | ---------------------- |
| and      | True if both are true  |
| &&       | True if both are true  |
| or       | True if either is true |
| ||       | True if either is true |
| xor      | True if one is true    |
| !        | True if it is not true |
*/

$a = 10;
$b = 20;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-900 text-white">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl text-center font-semibold">PHP From Scratch</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-blue-400 text-black rounded-lg shadow-md p-6 mt-6">
            <?= var_dump($x == $y) ?><br>
            <?= var_dump($x === $y) ?><br>
            <?= var_dump($x != $y) ?><br>
            <?= var_dump($x !== $y) ?><br>
            <?= var_dump($x <> $y) ?><br>
            <?= var_dump($x < $y) ?><br>
            <?= var_dump($x > $y) ?><br>
            <?= var_dump($x <= $y) ?><br>
            <?= var_dump($x >= $y) ?>
        </div>

        <div class="bg-blue-400 text-black rounded-lg shadow-md p-6 mt-14">
            <?= var_dump($a == 10 and $b == 20) ?><br>
            <?= var_dump($a == 10 && $b == 20) ?><br>
            <?= var_dump($a == 10 or $b == 20) ?><br>
            <?= var_dump($a == 10 || $b == 20) ?><br>
            <?= var_dump($a != 10 xor $b != 20) ?><br>
            <?= var_dump(!($a != 10)) ?>
        </div>
    </div>
</body>

</html>