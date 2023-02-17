<?php

 $arr = [0, 1, 2, 3, 4, 5];
 var_dump($arr);


 $arr1 = [
 	"John" => "john@gmail.com",
 	"Jenny" => "jenny@gmail.com",
 	"Ajit" => "ajit@gmail.com",

 ];
 var_dump($arr1);

 $arr2 = [
 	[0, 1, 2, 3, 4, 5],
 	[6, 7, 8 ],
 	[9, 10],

 ];

 var_dump($arr2);


 foreach($arr2 as $singleArr){
 	var_dump($singleArr);
 }
 foreach($arr2 as $singleArr){
 	foreach($singleArr as $values){
 		echo $values . ",";
 	}
 	echo "]" . PHP_EOL;
 }


 $arr3 = [
 	"emailist1" => [
 		"John1" => "john1@gmail.com",
 		"Jenny1" => 'jenny1@gmail.com',
 		"Ajit1" => "ajit1@gmail.com"
 	],

 	"emailist2" => [
 		"John2" => "john2@gmail.com",
 		"Jenny2" => "jenny2@gmail.com",
 		"Ajit2" => "ajit2@gmail.com"


 	]


 ];

foreach($arr3 as $valueArray){
	foreach($valueArray as $values){
		echo $values . PHP_EOL;
	}
}

foreach($arr3 as $key => $valueArray){
	echo "Values for Key: $key" . PHP_EOL;
	foreach( $valueArray as $values){
		echo $values . PHP_EOL;
	}
}
