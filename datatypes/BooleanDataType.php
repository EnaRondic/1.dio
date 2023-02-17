<?php 

//Define and use the boolean variable
$flag1 = TRUE;
$flag2 = FALSE;
echo ($flag1) ? "True" : "False";
echo PHP_EOL;
echo ($flag2) ? "True" : "False";
echo PHP_EOL;

//Print  boolean variable
echo "True:" . $flag1 . PHP_EOL;
echo "False" . $flag2 . PHP_EOL;

//use string 
$isLoggedIn = true;
$userSessinName = "John , smith";
echo ($isLoggedIn && $userSessinName) ? "User Logged in" : "User not logged in";
echo PHP_EOL;

//use string 
$isLoggedIn = true;
$userSessinName = null;
echo ($isLoggedIn && $userSessinName) ? "User Logged in" : "User not logged in";
echo PHP_EOL;

//Use Integer  Variable as Boolean
$marks = 0;
echo ($marks) ? "Mark has value" : "Mark does not have value";
echo PHP_EOL;

//Operators results
$name = "john";
echo ($name === "john") ? "Yes John" : "Not John";
echo PHP_EOL;