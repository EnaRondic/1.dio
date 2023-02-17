<?php

function custom_exception_handler($exception){
   	echo 'Caught Exception:' . $exception->getMessage() . PHP_EOL;
   }

   function divide($x, $y) : int {
   	try{
   	if( $y <=0){
   		throw new Exception("Divide by Zero Exception might happen");
   	}
   	$result = $x / $y;
   	
   }catch(Exception $e){
   	throw new Exception("Divide method has input param is less than zero." . $e->getMessage());
   }
   return $result;
	   }
   set_exception_handler('custom_exception_handler');

   divide(1, 0);