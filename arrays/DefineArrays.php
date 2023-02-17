<?php

$arr = [ 1, 2, 3];

//function to print
var_dump($arr);

 //human readable
 print_r($arr);

 //echo $arr; //Error

 //access and print arrays
 echo $arr[0] . PHP_EOL;
 echo $arr[1] . PHP_EOL;
 echo $arr[2] . PHP_EOL;

 // $arr is a arayy variable
 echo "Array lenght:" . count($arr) . PHP_EOL;

 for($count = 0; $count < count($arr); $count++){
 	echo $arr[$count] . PHP_EOL;
 	echo "$arr[$count]" . PHP_EOL;
 }

  const ARRAY_ELEMENT = 1;
  echo "$arr[ARRAY_ELEMENT]" . PHP_EOL;

  print_r($arr);
  echo $arr[0] = 5;
 echo $arr[1] = 6;
 echo $arr[2] = 7;
 print_r($arr);








