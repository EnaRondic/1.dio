<?php

function custom_exception_handler($exception){
   	echo 'Caught Exception:' . $exception->getMessage() . PHP_EOL;

   }

   function printEvenNUmbers(int $Start, int $end) {

   	   if($Start <= 0 || $end <= 0 || $Start == $end){
   	   	throw new Exception ("incorrect Input Parameters");
   	   }
   	   for(;$Start <= $end; $Start++){
   	   	if($Start%2==0){
   	   		echo "Even Number: $Start" . PHP_EOL;
   	   	}
   	   }
   
   }
   set_exception_handler('custom_exception_handler');

  printEvenNUmbers(1, 0);