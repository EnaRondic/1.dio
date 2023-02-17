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