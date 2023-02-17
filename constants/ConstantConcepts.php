<?php

//Define constant
define ( LANGUAGE, "PHP");

//Do not redefined the constant
define( LANGUAGE, "JAVA");

//Do not use Variable and Constant names
$name = "John, Smith";
define(name, "John, Smith");
echo $name . name;

//Assign Constant to Variable and print inside the string
$lang = LANGUAGE;
echo "This is a Language: $lang";

//Magic Constsnt
echo __LINE__;