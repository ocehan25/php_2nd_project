<?php
/*// Student 1
$name1 = "Alice";
$sub1_1 = 85;
$sub1_2 = 78;
$sub1_3 = 92;

// Student 2
$name2 = "Bob";
$sub2_1 = 67;
$sub2_2 = 74;
$sub2_3 = 80;

// Student 3
$name3 = "Charlie";
$sub3_1 = 90;
$sub3_2 = 88;
$sub3_3 = 95;

// Student 4
$name4 = "Diana";
$sub4_1 = 76;
$sub4_2 = 85;
$sub4_3 = 83;

// Function to get average
function average($a, $b, $c) {
    return round(($a + $b + $c) / 3, 2);
}

// Display Student 1
echo "Name: $name1<br>";
echo "Subject 1: $sub1_1<br>";
echo "Subject 2: $sub1_2<br>";
echo "Subject 3: $sub1_3<br>";
echo "Average: " . average($sub1_1, $sub1_2, $sub1_3) . "<br><br>";

// Display Student 2
echo "Name: $name2<br>";
echo "Subject 1: $sub2_1<br>";
echo "Subject 2: $sub2_2<br>";
echo "Subject 3: $sub2_3<br>";
echo "Average: " . average($sub2_1, $sub2_2, $sub2_3) . "<br><br>";

// Display Student 3
echo "Name: $name3<br>";
echo "Subject 1: $sub3_1<br>";
echo "Subject 2: $sub3_2<br>";
echo "Subject 3: $sub3_3<br>";
echo "Average: " . average($sub3_1, $sub3_2, $sub3_3) . "<br><br>";

// Display Student 4
echo "Name: $name4<br>";
echo "Subject 1: $sub4_1<br>";
echo "Subject 2: $sub4_2<br>";
echo "Subject 3: $sub4_3<br>";
echo "Average: " . average($sub4_1, $sub4_2, $sub4_3) . "<br><br>";
*/



/*
// 3 types of arrays 

// Regular (Indexed) Array
$fruits = ["Apple", "Banana", "Cherry"];

// Associative Array
$person = ["name" => "Alice", "age" => 25];

// Multidimensional Array
$students = [
    ["name" => "Bob", "scores" => [67, 74, 80]],
    ["name" => "Diana", "scores" => [76, 85, 83]]
];

// Example usage
echo $fruits[0]; // Output: Apple
echo "<br>";
echo $person["name"]; // Output: Alice
echo "<br>";
echo $students[0]["name"]; // Output: Bob
echo "<br>";
echo $students[0]["scores"][1]; //
*/




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="get">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" min="1" required><br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>