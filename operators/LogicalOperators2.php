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