<?php

$content = "this is a very long content and it is string";
$findContentWord = " content";
$position = strpos($content, $findContentWord);
echo $position . PHP_EOL;


$findContentWord = "content1";
$position = strpos($content, $findContentWord);
echo $position . PHP_EOL;
echo true . PHP_EOL;
echo false . PHP_EOL;
echo true . PHP_EOL;

if ( $position === false){
	echo "Not found" . PHO_EOL;
}
$findContentWord = "content1";
$position = strpos($content, $findContentWord);
echo $position . PHP_EOL;