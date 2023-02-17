<?php

//define and check null
$name = null;
echo $name . PHP_EOL;
echo ($name) ? "Has value" : "Empty" . PHP_EOL;

//chech if the variable is null or not
$name = "0";
echo ($name) ? "Has value" : "Empty" . PHP_EOL;
echo (!is_null($name)) ? "Has value" : "Empty" . PHP_EOL;

//Remove the variable from the program and memory
unset($name);
echo ( !is_null($name)) ? "Has value" : "Empty" . PHP_EOL;







