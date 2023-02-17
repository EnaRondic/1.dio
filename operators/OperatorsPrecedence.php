 <?php

  $val = 10;
  echo $val++;
  $counter = $val++;
  echo $counter;
  echo $val . PHP_EOL;

  //Guess the output
  $val = 5 * 2 + 5;
  echo $val;

  //Classic - Assignment has hogher precedence over and
  $result1 = true && false;
  $result2 = true and false;

  echo ($result1) ? "true" : "false";
  echo PHP_EOL;
  echo ($result2) ? "true" : "false";
  echo PHP_EOL;