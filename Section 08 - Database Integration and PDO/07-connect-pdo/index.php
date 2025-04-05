<?php
// DB Credentials
$host = "localhost";
$port = 3306;
$dbName = "blog";
$username = "frenk";
$password = "123456";

// Data Source Name
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO to throw exeptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database Connected...";
} catch (PDOException $e) {
    // If there is an error, catch it here
    echo "Connection Failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect With PDO</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100 font-sans"></body>

</html>