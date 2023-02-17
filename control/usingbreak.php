<?php
$value = 1;
 do{
 	echo $value . PHP_EOL;
 	if($value >=100){
 		break;
 	}
 	$value++;

 	}while(true);

 	//Break multiple loop
 	$loop1 = 1;
 	$loop2 = 1;
 	$loop3 = 1;

 	for(; $loop1<=10;$loop1++){
 		
 		if($loop1 == 7){
 			break;
 		}
 		echo "Loop 1: $loop1" . PHP_EOL;



 	}