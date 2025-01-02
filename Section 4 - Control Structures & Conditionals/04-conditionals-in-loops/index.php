<?php

// $number = 1;

// while ($number <= 10) {
//     if ($number % 2 === 0) {
//         echo $number . " is even <br>";
//     } else {
//         echo $number . " is odd <br>";
//     };

//     $number++;
// };

// Break out of a loop
// for ($i = 0; $i < 10; $i++) {
//     if ($i == 5) {
//         break;
//     };

//     echo $i . "<br>";
// };

// Skip and continue
// for ($i = 0; $i < 10; $i++) {
//     if ($i == 5) {
//         continue;
//     };

//     echo $i . "<br>";
// };

$studentGrades = array(
    "Ronnie" => 99,
    "Tommy" => 80,
    "Bruce" => 95,
    "Adrian" => 83,
);

foreach ($studentGrades as $name => $grade) {
    if ($grade >= 90) {
        echo $name . " has an excellent grade <br>";
    } else {
        echo $name . " has a good grade <br>";
    };
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-900 text-white"></body>

</html>