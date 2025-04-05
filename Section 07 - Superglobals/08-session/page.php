<?php

session_start();

if (isset($_SESSION["name"])) {
    echo $_SESSION["name"];
} else {
    echo "Name is not set";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating a Session</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100">
</body>

</html>