<?php
setcookie("username", "fKoler", time() + 3600, "/");
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
      <h1 class="text-3xl font-bold mb-4">Cookie Set</h1>
      <p class="text-lg mb-6">Your cookie has been successfully set. Click below to proceed.</p>
      <a href="page.php" class="text-blue-400 hover:text-blue-600 font-medium text-lg underline">
        Go to page.php
      </a>
    </div>
  </div>

</body>

</html>