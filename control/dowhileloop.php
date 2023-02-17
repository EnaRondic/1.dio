 <?php

 //Semicolon after the while
 $max_value = 100;
 $value1 = 2;
 do{
 	echo "Square:" . $value1 . PHP_EOL;
 	$value1 *=2;
 }while($value1 <= $max_value);
