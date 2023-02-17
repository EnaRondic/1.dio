<?php


$content = "You can do string operations easily with strings function";
$findWord = "operations";
$position = false;
 echo "$content" . PHP_EOL;

 //Number of words
 echo "NUmber of words in the string:" . str_word_count($content) . PHP_EOL;

 //Replace string
 echo "F|ind and replace perations with anipulation";
 str_replace("operations","manipulations",$content) . PHP_EOL;

 //Reverse string
 echo strrev($content) . PHP_EOL;

 //Shuffle Strings
 echo str_shuffle($content) . PHP_EOL;

 //Find position case insensitive
 echo stripos($content, "OPERATIONS") . PHP_EOL;

 //upercase and lowercase
 echo strtoupper($content) . PHP_EOL;
 echo strtolower($content) . PHP_EOL;

 