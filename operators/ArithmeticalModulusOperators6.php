<?php 
 
 //Calculate the Student total marks for 3 subjects
$maths = 70;
$science = 30;
$english = 80;
$totalMarks = $maths + $science + $english;
echo "Student Total Marks; $totalMarks for Maths ($maths) + Science ($science) + English ($english)" . PHP_EOL;

//Saple 2
//Display a total without a $totalMarks Variable
echo "Student Total Marks; $totalMarks for Maths ($maths) + Science ($science) + English ($english)" . PHP_EOL;
echo "Student Total Marks; ".($maths + $science + $english)." for Maths ($maths) + Science ($science) + English ($english)" . PHP_EOL;

//Sample 3
$totalSubjects = 300; 
$totalDifference = $totalSubjects - $totalMarks;
echo "Difference between total and marks achieved: $totalDifference" . PHP_EOL;

//Sample 4
//Calculate the area using the lenght and breath
$length = 10;
$breath = 20;
$area = $length * $breath;
echo $area . PHP_EOL;


//Sample 5
//Calculate the percentage of Overall Scored Marks
$percentage = ($totalMarks / $totalSubjects) * 100;
echo "Percentag Scored: $percentage%" . PHP_EOL;

//Sample 6
//Use the Modulus Operator 
$a = 100 % 5;
echo $a . PHP_EOL;
$b = 101 % 5;
echo $b . PHP_EOL;

$a = 105 % 5;
echo $a . PHP_EOL;
$b = 106 % 5;
echo $b . PHP_EOL;