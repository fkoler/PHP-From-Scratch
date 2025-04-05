<?php

/*
  -- Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out "The sum of the {amount} numbers is: {sum} ". For example, if the array is [1, 2, 3, 4, 5], the output should be "The sum of the 5 numbers is: 15". 
*/

echo "<br><h3 style='color: crimson;'>Sum Of An Array</h3>";

$numbers = [1, 2, 3, 4, 5, 6];

$sum = array_sum($numbers);

$count = count($numbers);

echo "The sum of the {$count} numbers (" . implode(", ", $numbers) . ") is: {$sum}";
echo "<br><br><hr><br>";
/*
  -- Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add "purple" and "orange" to the end of the array.
  3. Replace the second color with "pink"
  4. Remove the last element of the array.

You should end up with the following array: ["yellow", "pink", "blue", "red", "purple"]
*/

echo "<h3 style='color: crimson;'>Colors Array</h3>";

$colors = ["red", "blue", "green", "yellow"];

$colors = array_reverse($colors);

array_push($colors, "purple", "orange");

$colors[1] = "pink";

array_pop($colors);

echo "<pre>";
print_r($colors);
echo "</pre><br><hr><br>";

/*
  -- Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, "PHP", "MySQL", "JavaScript", "HTML", "CSS", etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo "<h3 style='color: crimson;'>Job Listings</h3>";

$jobListings = [
  [
    "id" => 1,
    "job_title" => "Backend Developer",
    "company" => "TechCorp",
    "contact_email" => "jobs@techcorp.io",
    "contact_phone" => "123-456-7890",
    "skills" => ["PHP", "MySQL", "Laravel"],
  ],
  [
    "id" => 2,
    "job_title" => "Frontend Developer",
    "company" => "DesignPro",
    "contact_email" => "careers@designpro.io",
    "contact_phone" => "234-567-8901",
    "skills" => ["JavaScript", "HTML", "CSS", "React"],
  ],
  [
    "id" => 3,
    "job_title" => "Full Stack Developer",
    "company" => "DevSolutions",
    "contact_email" => "info@devsolutions.io",
    "contact_phone" => "345-678-9012",
    "skills" => ["PHP", "JavaScript", "Node.js", "Vue.js"],
  ],
];

$newJobListing = [
  "id" => 4,
  "job_title" => "Data Scientist",
  "company" => "DataGen",
  "contact_email" => "hr@datagen.io",
  "contact_phone" => "456-789-0123",
  "skills" => ["Python", "SQL", "Machine Learning", "Rust"],
];

array_push($jobListings, $newJobListing);

echo "The job title of the second listing is: " . $jobListings[1]["job_title"] . "<br>";
echo "The first skill of the third listing is: " . $jobListings[2]["skills"][0] . "<br>";

echo "<pre>";
print_r($jobListings);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-black text-white"></body>

</html>