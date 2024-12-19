<?php
// - Basic for Loop
/*
for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
};
*/

// - Basic while Loop
/*
$i = 0;

while ($i <= 10) {
    echo $i . "<br>";
    $i++;
};
*/

// - Basic do-while Loop
/*
$i = 11;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-black text-white">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl text-center font-semibold">PHP From Scratch</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-blue-400 text-black rounded-lg shadow-md p-6 mt-6">
            <ul>
                <p class="text-xl">1. <code class="font-bold">for</code> loop</p><br>
                <?php for ($i = 0; $i <= 10; $i++): ?>
                    <li>Number: <?= $i ?></li>
                <?php endfor; ?>
            </ul>
            <br>
            <ul>
                <p class="text-xl">2. <code class="font-bold">while</code> loop</p><br>
                <?php $i = 0;
                while ($i <= 10): ?>
                    <li>Number: <?= $i ?></li>
                <?php $i++;
                endwhile; ?>
            </ul>
            <br>
            <ul>
                <p class="text-xl">3. <code class="font-bold">do while</code> loop</p><br>
                <?php $i = 0;
                do { ?>
                    <li>Number: <?= $i ?></li>
                <?php $i++;
                } while ($i <= 10); ?>
            </ul>
        </div>
    </div>
</body>

</html>