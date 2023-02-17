<?php

/*
1. No need to use $ to use the constant
2. 
*/
$name = "John, Smith";
define (name, "John, Smith");

echo $name . name;

$name= "Walter, White";
define (name, "Walter, White");
echo $name . name;