<?php
putenv("DB_HOST=localhost");
putenv("DB_USER=root");

$host = getenv("DB_HOST");
$user = getenv("DB_USER");

$foo = "Foo Global";

function test()
{
  $foo = "Foo Local";

  echo "Global Variable: " . $GLOBALS["foo"] . "<br>";
  echo "Local Variable: " . $foo . "<br>";
}

$foo = "WTBH?";
test();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">
  <div class="container mx-auto p-8 bg-gray-900 shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">
      System Information
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-gray-700 p-4 rounded-lg">
        <strong class="block">DB Host:</strong>
        <p class="text-red-500"><?= $host ?></p>
      </div>

      <div class="bg-gray-700 p-4 rounded-lg">
        <strong class="block">DB User:</strong>
        <p class="text-red-500"><?= $user ?></p>
      </div>
    </div>
</body>

</html>