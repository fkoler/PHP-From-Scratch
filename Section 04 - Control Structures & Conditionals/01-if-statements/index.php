<?php
$age = 17;

// If statement
// if ($age >= 21) {
//     echo "You are old enough to drink in the US";
// };

// If-Else
// if ($age >= 21) {
//     echo "You are old enough to drink in the US";
// } else {
//     echo "You are NOT old enough to drink in the US";
// };

// Nested if statement
if ($age >= 21) {
    echo "You are old enough to drink and vote in the US";
} else {
    if ($age >= 18) {
        echo "You are old enough to vote in the US";
    } else {
        echo "You are NOT old enough to drink and vote in the US";
    };
};

echo "<br>";

// If-Else-If
if ($age >= 21) {
    echo "You are old enough to drink and vote in the US";
} else if ($age >= 18) {
    echo "You are old enough to vote in the US";
} else {
    echo "You are NOT old enough to drink and vote in the US";
};
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