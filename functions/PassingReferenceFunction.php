<?php

  $result = 0;
  function add($a, $b, $result =  null): int{
  	$addition = $a + $b;
  	retrun $addition;
  }
  echo $result . PHP_EOL;
  $result = add(1,2);
  echo $result . PHP_EOL;