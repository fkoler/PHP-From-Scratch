<?php
/*
Fizzbuzz Challenge:
Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”. Remember, you can use the modulus operator to check if a number is divisible by another number.
*/

/* Solution 1 */
/*
$i = 1;
while ($i <= 100) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo $i;
}
echo "<br>";
$i++;
};
*/

/* Solution 2 */
/*
$i = 1;
do {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo $i;
    }
    echo "<br>";
    $i++;
} while ($i <= 100);
*/

/* Solution 3 */
/*
foreach (range(1, 100) as $i) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo $i;
    }
    echo "<br>";
};
*/

/* Solution 4 */
$result = [];
foreach (range(1, 100) as $i) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $result[] = "<span class='text-red-500'>FizzBuzz</span>";
    } elseif ($i % 3 == 0) {
        $result[] = "<span class='text-yellow-200'>Fizz</span>";
    } elseif ($i % 5 == 0) {
        $result[] = "<span class='text-yellow-800'>Buzz</span>";
    } else {
        $result[] = $i;
    }
};

echo implode("<br>", $result);

/* Solution 5 */
/*
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo $i;
    }
    echo "<br>";
};
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FizzBuzz</title>
</head>

<body class="bg-black text-white"></body>

</html>