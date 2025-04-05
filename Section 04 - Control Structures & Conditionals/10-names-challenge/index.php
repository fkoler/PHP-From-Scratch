<?php
/*
Names Challenge:
1. Take the array of names below and loop through them. The type of loop is up to you.
2. Within the loop, use a conditional statement to check if the first letter of the name is "C".
3. If the first letter is "C", skip that name and continue to the next iteration.
4. If the first letter is not "C", reverse the string.
5. Make all names lowercase before printing them.
*/

$names = ["Till", "Paul", "Cristoph", "Christian", "Richard", "Oliver"];
?>

<!-- Solution 1 -->
<!-- <!DOCTYPE html> (Commented out)
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Names Challenge</title>
</head>

<body class="bg-black text-white flex flex-col items-center justify-center h-screen">
    <ul class="text-lg">
        <?php
        /* (Commented out)
        foreach ($names as $name) {
            if ($name[0] === 'C') continue;

            $reversedName = strtolower(strrev($name));

            echo "<li class='mb-2'>$reversedName</li>";
        }
        */
        ?>
    </ul>
</body>

</html> -->

<!-- Solution 2 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Names Challenge</title>
</head>

<body class="bg-black text-white flex flex-col items-center justify-center h-screen">
    <ul class="text-lg">
        <?php
        for ($i = 0; $i < count($names); $i++) {
            if ($names[$i][0] === 'C') continue;

            $reversedName = strtolower(strrev($names[$i]));

            echo "<li class='mb-2'>$reversedName</li>";
        }
        ?>
    </ul>
</body>

</html>