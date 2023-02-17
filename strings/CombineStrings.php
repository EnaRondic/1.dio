<?php

//'.' (dot) operator
$firstname = "john";
$lastname = " ,Smith";
$fullname = $firstname . $lastname;
echo $fullname . PHP_EOL;

$Marks = 100;
$passed = true;

$content = "student $fullname got total" . $Marks . "He is passed" . $passed;
echo $content . PHP_EOL;