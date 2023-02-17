<?php

$name = "John, Smith";

$message = 1;
$message = "PHP is the best";
echo $message  . "<br>";

echo "Name variable = $name" . "<br>";
echo "Name variable = $name". "<br>";


$lenght = "10";
$breath = 20;
$area= $lenght * $breath;
echo "Area: $area" . "<br>";

$Name = "Walter White";
echo "$name is not equal to $Name" . "<br>";


global $count;
$count = 1;
function show_count(){
	global $count;
	$count = 2;
	echo $count;
}
show_count();
echo $count .  "<br>";


function counter_static(){
static $count1 =1;
echo $count . "<br>";
$count = $count + 1;

}
counter_static();
counter_static();
counter_static();


function print_global_variables(){
	echo $GLOBALS['count'] . "<br>";
	echo $$countofcount;

}

echo isset($$countofcount) ? "Variable is set"  : "Variable is not set";