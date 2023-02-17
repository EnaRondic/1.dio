<?php

//Sample 1
$name = 'Srini';

function print_name(){
	$name = "PHP!";
	echo $name;
}
print_name();
echo $name;

//Sample 2
$message = "Welcome to PHP";
function print_message(){
	echo $message;
}
print_message();