<?php 

  $arr = [];

  echo count($arr) . PHP_EOL;
  var_dump($arr) . PHP_EOL;
  print_r($arr) . PHP_EOL;

  if(empty($arr)){
  	echo "Array is Empty" . PHP_EOL;
  }
var_dump($arr) . PHP_EOL;
  $arr = 10;
  var_dump($arr) . PHP_EOL;

  $arr = [10];
  var_dump($arr);

  $arr[0] = [10];

  var_dump($arr);

  $arr = [];
  var_dump($arr);

  $arr = [[]];
  var_dump($arr);
