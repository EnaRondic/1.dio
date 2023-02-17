<?php
//Using else if
$input_number = 10;
$result = $input_number % 2;
if( $result ){
	echo 'Odd Number' . PHP_EOL;

}else if( !$result){
   echo 'Even number' . PHP_EOL;
}

//Check if the input number is greater than 10
if($input_number > 10){
     echo "Number greather than 10" . PHP_EOL;
}else if ($input_number == 10){
    echo "Number equal to 10" . PHP_EOL;
}else {
	echo "Number less than 10" . PHP_EOL;
}