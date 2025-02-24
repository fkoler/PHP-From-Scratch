<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

// **Easy
function fahrenheitToCelsius($fahrenheit)
{
  return ($fahrenheit - 32) * 5 / 9;
}

$tempF = 68;
$tempC = fahrenheitToCelsius($tempF);

echo "Easy: {$tempF}&deg;F = " . round($tempC) . "&deg;C";

echo '<br>';

// **Harder
$baseTemp = 32;

// Closure
$fahrenheitToCelsius = function ($fahrenheit) use ($baseTemp) {
  return ($fahrenheit - $baseTemp) * 5 / 9;
};

// Arrow
// $fahrenheitToCelsius = fn($fahrenheit) => ($fahrenheit - $baseTemp) * 5 / 9;

$tempF = 68;
$tempC = $fahrenheitToCelsius($tempF);

echo "Harder: {$tempF}&deg;F = " . round($tempC) . "&deg;C";

echo '<br><br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

$names = ["Till", "Paul", "Christoph", "Richard", "Oliver", "Christian"];

// function printNamesToUpperCase($names)
// {
//   foreach ($names as $name) {
//     echo strtoupper($name) . "<br>";
//   }
// }

// printNamesToUpperCase($names);

// Arrow
$printNamesToUpperCase = fn($names) => array_map(fn($name) => strtoupper($name) . "<br>", $names);

echo implode("", $printNamesToUpperCase($names));

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

// function findLongestWord($sentence)
// {
//   $words = explode(" ", $sentence);
//   $longestWord = "";

//   foreach ($words as $word) {
//     if (strlen($word) > strlen($longestWord)) {
//       $longestWord = $word;
//     }
//   }

//   return $longestWord;
// }

// echo findLongestWord("Die Sonne scheint mir aus den Augen");

// array_reduce()
// 1
$findLongestWord = function ($sentence) {
  return array_reduce(explode(" ", $sentence), function ($longest, $word) {
    return strlen($word) > strlen($longest) ? $word : $longest;
  }, "");
};

echo $findLongestWord("Die Sonne scheint mir aus den Augen");

// 2
// $findLongestWord = fn($sentence) => array_reduce(
//   explode(" ", $sentence),
//   fn($longest, $word) => strlen($word) > strlen($longest) ? $word : $longest,
//   ""
// );

// echo $findLongestWord("Die Sonne scheint mir aus den Augen");

// array_map() & array_keys() & max()
// $findLongestWord = fn($sentence) => explode(" ", $sentence)[array_keys(
//   array_map("strlen", explode(" ", $sentence)),
//   max(array_map("strlen", explode(" ", $sentence)))
// )[0]];

// echo $findLongestWord("Die Sonne scheint mir aus den Augen");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>More Function Challenges</title>
</head>

<body class="bg-black text-white"></body>

</html>