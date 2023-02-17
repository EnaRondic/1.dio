<?php

//continue will skip the next line and go to next loop
$value = 1;
while(true){
	$result = $value % 2;
if ($result == 1){
	$value++;
	continue;
}
	if($value >10){
		break;
	}
	echo "even numbers" . $value . PHP_EOL;
	$value++;
}