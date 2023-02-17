<?php

//Sample 1
//Greet Hello, Name if the user is logged in and has permission
$permission = true;
$loggedin = false;
$user = true;
$user = "John, Smith";
echo ( $permission and $loggedin) ? "Hello $user" : "Hello, Gues";
echo PHP_EOL;

//Sample 2
//Check if student passed any one exam
$student = "John";
$mathpassed = true;
$sciencepassed = true;
echo ( $mathpassed or $sciencepassed) ? "$student has passed" : "$student has not passed";

//Sample 3
//Find the difference between and &&
$result1 = true && false;
$result2 = true and false;
echo PHP_EOL;
echo ( $result1 ) ? "true" : "False";
echo PHP_EOL;
echo ( $result2 ) ? "True" : "False";
echo PHP_EOL;

//Sample 4
//Find the difference between or ||
$result1 = true || false;
$result2 = true or false;
echo PHP_EOL;
echo ( $result1 ) ? "true" : "False";
echo PHP_EOL;
echo ( $result2 ) ? "True" : "False";
echo PHP_EOL;



//Sample 5
//Check if student is not passed and print the results
$total = 34;
$passingMarks= 35;
$isPassed = ($total >= $passingMarks) ? true : false;
echo PHP_EOL;
echo (!isPassed) ? "Not Passed" : "Passed";
echo PHP_EOL;






