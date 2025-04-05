<?php
$output = null;

$string = "Hello there";

// strlen()
$output = strlen($string); // 11

// str_word_count()
$output = str_word_count($string); // 2

// strpos()
$output = strpos($string, "there"); // 6

// get position char by index
$output = $string[9]; // r

// substr()
$output = substr($string, 0, 5); // Hello
$output = substr($string, 6, 5); // There

// str_replace()
$output = str_replace("there", "universe", $string); // Hello Universe

// strtolower()
$output = strtolower($string); // hello there

// strtoupper()
$output = strtoupper($string); // HELLO THERE

// ucwords()
$output = ucwords($string); // Hello There

// trim()
$output = trim("   Lorem    ipsum    dolores"); // Lorem ipsum dolores

// https://www.php.net/manual/en/ref.strings.php
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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>