<?php
// Student 1
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
?>