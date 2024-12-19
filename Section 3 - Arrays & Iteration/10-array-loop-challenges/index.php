<?php

/*
  Challenge 1: Create a multiplication table using a nested `for` loop. The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
... 
10 x 10 = 100
*/
echo "<br><h2 class='font-bold text-green-500'>Multiplication Table</h2><br>";

for ($i = 1; $i <= 10; $i++) {
  for ($j = 1; $j <= 10; $j++) {
    echo "{$i} x {$j} = " . ($i * $j) . "<br>";
  }
  echo "<br>";
};

/*
  Challenge 2: Get the sum of the numbers in an array by using a foreach loop. For bonus points, also use a for loop.
*/

echo "<h2 class='font-bold text-green-500'>Array Sum</h2><br>";

$numbers = [3.14, 2.718, 1.618, 6.022e23, 299792458];

// foreach
$sumForeach = 0;
foreach ($numbers as $number) {
  $sumForeach += $number;
}
echo "<p>Sum using <code class='text-red-500'>foreach</code> loop: $sumForeach</p>";

// for
$sumFor = 0;
for ($i = 0; $i < count($numbers); $i++) {
  $sumFor += $numbers[$i];
}
echo "<p>Sum using <code class='text-red-500'>for</code> loop: $sumFor</p>";

/*
  Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key "grades". 

  1. Create an array of students with their names and grades (0 - 100)
	2. Iterate over the students array with a foreach loop
	3. Calculate the average grade for each student
*/

echo "<br><h2 class='font-bold text-green-500'>Average Grade</h2><br>";

$students = [
  [
    "name" => "Ronnie James Dio",
    "grades" => [87, 90, 78, 92, 88, 91],
  ],
  [
    "name" => "Tony Iommi",
    "grades" => [88, 76, 96, 89, 97, 90],
  ],
  [
    "name" => "Glenn Hughes",
    "grades" => [73, 80, 85, 75, 86, 100],
  ],
];

foreach ($students as $student) {
  $name = $student["name"];
  $grades = $student["grades"];
  $average = array_sum($grades) / count($grades);

  echo "<p><span class='text-red-500'>$name's</span> average grade is: " . round($average, 2) . "</p>";
};

echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Array & Loop Challenges</title>
</head>

<body class="bg-gray-900 text-white"></body>

</html>