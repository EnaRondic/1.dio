<?php

  $fileName = "students.csv";
  $content= file_get_contents($fileName);
  print_r($content);
  echo PHP_EOL;

  $csvFile = file($fileName);
  var_dump($csvFile);
  foreach($csvFile as $line){
  	echo $line . PHP_EOL;
  }