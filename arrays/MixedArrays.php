<?php

  $arr = [];
  $arr[0] = 1;
  $arr[2] = "string";
  $arr[4] = true;
  $arr[10] = 14.5;

  $arr[] = "New String 10";
  $arr[] = "New String 2";

  var_dump($arr);

  $arr[0] = "Preeviously 1 and Now changed value to stiring";
  foreach($arr as $value){
  	echo $value . PHP_EOL;
  }


  echo $arr[1] . PHP_EOL;