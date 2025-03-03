<?php
$username = $_COOKIE["username"] ?? "Guest";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Cookies</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100 font-sans">

  <div class="flex justify-center items-center min-h-screen">
    <div class="bg-gray-800 text-gray-200 p-6 rounded-lg shadow-lg w-full max-w-md text-center">
      <h1 class="text-3xl font-bold mb-4">Welcome <?= $username ?></h1>
      <p class="text-lg mb-6">We're happy to have you here! You can delete your cookie by clicking below:</p>
      <a href="destroy.php"
        class="inline-block text-red-400 hover:text-red-600 font-medium text-lg underline">
        Delete cookie
      </a>
    </div>
  </div>

</body>

</html>