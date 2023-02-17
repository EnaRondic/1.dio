<?php

  echo "Current Date:" . date("d-m-y") . PHP_EOL;
  echo "Current Date: " . date("D-M-Y") . PHP_EOL;

   echo "Current Date:" . date("d-m-y h:i:s:a" ) . PHP_EOL;
  echo "Current Date: " . date("D-M-Y H:i:s;A") . PHP_EOL;

  //Mili Seconds
  echo "Current time in MilliSeconds: " . time() . PHP_EOL;

  $time = time() + 1000;
  echo "Current Date: " . date("d-m-y h:i:s:a", $time) . PHP_EOL;
