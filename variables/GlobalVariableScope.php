<?php

//Sample 1
global $name;
$name = "srini"; 

function print_name() {
	$name = "PHP";
	echo $name;
}
print_name();
echo $name;

//Sample 2
global $message;
$message = "Welcome to PHP";

function print_message(){
	echo $message;
}

print_message();
echo $message;

//Sample 3
global $message1;
$message = "Welcome to PHP";

function print_message1(){
	global $message1;
	$message1 = "This is changed values of message";
	echo $message1;
}

print_message1();
echo $message1;