<?php

//Sample 1
//Define constants
//define(NAME OF THE CONSTANT, VALUE OF THE CONSTANT);
define ("LANGUAGE", "PHP");
$lang = LANGUAGE;

echo "This program is writting using $lang <br>";
echo "This program is writting using LANGUAGE <br>";
echo "This progra, is writting using" . LANGUAGE . "<br>";

//Sample 2
define ( "LANGUAGE", "JAVA");

echo "This program is writting using" . LANGUAGE . "<br>";

//Sample 3
$LANGUAGE = "JAVA";
echo "This program is writting using" . $LANGUAGE . "<br>";

//Sample 4
//define ("1VERSION", 7.3);
//echo1 VERSION;


//Sample 5
define ("NAME", "");
//echo isset(NAME);
//echo NAME;

//Access constant using the constant method
echo constant('LANGUAGE');