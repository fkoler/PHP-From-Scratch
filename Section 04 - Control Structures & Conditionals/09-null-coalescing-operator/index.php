<?php
// $firstColor = "white";
// $secondColor = "red-600";

// $defaultColor = isset($firstColor) ? $firstColor : "black";
// $defaultColor = $firstColor ?? "black";

// $defaultColor = isset($firstColor) ? $firstColor : (isset($secondColor) ? $secondColor : "black");
$defaultColor = $firstColor ?? $secondColor ?? "black";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Null Coalescing Operator</title>
</head>

<body class="bg-<?= $defaultColor ?>"></body>

</html>