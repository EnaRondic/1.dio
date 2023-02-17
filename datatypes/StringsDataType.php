<?php

//Define String and use String
$name1 = "John, Smith1";
$name2 = "John , Smith2";

echo "$name1 and $name2" . PHP_EOL;
echo '$name1 and $name2' . PHP_EOL;

//combing strings
$name3 = $name1 . " - " . $name2;
echo $name3 . PHP_EOL;

//Uce Back Slack to escape the characters
$name4 = "This is a \"special\" string";
echo $name4 . PHP_EOL;
