<?php
 
 $inputvalue = 0;
 if( $inputvalue <= 0){
 	goto error_block;
 }
 exit();
 error_block:
 echo "This is a error block and will execute anyway" . PHP_EOL;

 for($count = 0; $count <= 10; $count++){
 	if($count == 2){
 		goto loop2;
 		break;
 	}
 }
 loop2:
 echo "Counter value ic $count" . PHP_EOL;
 goto loop3;
 for($count = 0; $count <= 10; $count++){
 	loop3:
 	echo Counter value ic $count" . PHP_EOL;
 }
