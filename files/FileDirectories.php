<?php

//Sample 1

$path = "TestFolder1";
$result = scandir($path);
var_dump($result);
foreach($result as $dir){
	if($dir != "." && $dir != ".."){
		echo $dir . PHP_EOL;

	}
	
}

//Remove . and ..
$directory = array_diff($result, ['.', '..']);
var_dump($directory);
foreach($directory as $dir){
	{
		echo $dir . PHP_EOL;

	}
}

//Sample 2 and 3
$result = scandir($path);
$result = array_diff($result, ['.', '..']);
var_dump($result);
foreach($result as $dir){
	if( is_file($path . "/" . $dir )){

		echo $dir . PHP_EOL;

	}
	
		

	
	
}


$result = glob

	