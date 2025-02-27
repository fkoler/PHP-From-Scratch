<?php

// Common server variables:
$requestMethod = $_SERVER["REQUEST_METHOD"] ?? "";
$serverProtocol = $_SERVER["SERVER_PROTOCOL"] ?? "";
$serverName = $_SERVER["SERVER_NAME"] ?? "";
$serverPort = $_SERVER["SERVER_PORT"] ?? "";
$serverSoftware = $_SERVER["SERVER_SOFTWARE"] ?? "";
$serverAdmin = $_SERVER["SERVER_ADMIN"] ?? "";
$documentRoot = $_SERVER["DOCUMENT_ROOT"] ?? "";
$scriptFilename = $_SERVER["SCRIPT_FILENAME"] ?? "";
$scriptName = $_SERVER["SCRIPT_NAME"] ?? "";
$phpSelf = $_SERVER["PHP_SELF"] ?? "";
$remoteAddr = $_SERVER["REMOTE_ADDR"] ?? "";
$connection = $_SERVER["HTTP_CONNECTION"] ?? "";
$host = $_SERVER["HTTP_HOST"] ?? "";
$referer = $_SERVER["HTTP_REFERER"] ?? "";
$userAgent = $_SERVER["HTTP_USER_AGENT"] ?? "";
$queryString = $_SERVER["QUERY_STRING"] ?? "";
$requestUri = $_SERVER["REQUEST_URI"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black">
  <div class="container mx-auto p-8 bg-gray-900 text-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">Server Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Request Method:</strong>
        <p class="text-red-500"><?= $requestMethod ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Server Protocol:</strong>
        <p class="text-red-500"><?= $serverProtocol ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Server Name:</strong>
        <p class="text-red-500"><?= $serverName ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Server Port:</strong>
        <p class="text-red-500"><?= $serverPort ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Server Software:</strong>
        <p class="text-red-500"><?= $serverSoftware ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Server Admin:</strong>
        <p class="text-red-500"><?= $serverAdmin ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Document Root:</strong>
        <p class="text-red-500"><?= $documentRoot ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Script Filename:</strong>
        <p class="text-red-500"><?= $scriptFilename ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Script Name:</strong>
        <p class="text-red-500"><?= $scriptName ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">PHP Self:</strong>
        <p class="text-red-500"><?= $phpSelf ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Remote Addr:</strong>
        <p class="text-red-500"><?= $remoteAddr ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Connection:</strong>
        <p class="text-red-500"><?= $connection ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Host:</strong>
        <p class="text-red-500"><?= $host ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Referer:</strong>
        <p class="text-red-500"><?= $referer ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">User Agent:</strong>
        <p class="text-red-500"><?= $userAgent ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Query String:</strong>
        <p class="text-red-500"><?= $queryString ?></p>
      </div>

      <div class="bg-gray-700 text-white p-4 rounded-lg">
        <strong class="block mb-2">Request Uri:</strong>
        <p class="text-red-500"><?= $requestUri ?></p>
      </div>
    </div>
</body>

</html>