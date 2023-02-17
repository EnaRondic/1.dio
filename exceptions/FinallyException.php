<?php

   function custom_exception_handler($exception){
   	echo 'Caught Exception:' . $exception->getMessage() . PHP_EOL;

   }

   set_exception_handler('custom_exception_handler');


try{

   throw new Exception ("Exception is raised");
}finally{

	echo "This line is executed before exception" . PHP_EOL;
}