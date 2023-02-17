<?php


$input_number = 10;
$result = $input_number % 2;
if( $result ){
	echo 'Odd Number' . PHP_EOL;

}else if( !$result){
   echo 'Even number' . PHP_EOL;
}

switch($result){

	case 1:
	echo "Odd Number" . PHP_EOL;
	break;
	case 0:
	echo "EvenNumber" . PHP_EOL;
	break;
	default:
	echo 'Invalid Input' . PHP_EOL;
}

if($input_number > 10){
     echo "Number greather than 10" . PHP_EOL;
}else if ($input_number == 10){
    echo "Number equal to 10" . PHP_EOL;
}else {
	echo "Number less than 10" . PHP_EOL;
}

switch(true){

	case $input_number > 10:
	echo "Number greather than 10" . PHP_EOL;
	break;
	case $input_number == 10;
	echo "Number greather than 10" . PHP_EOL;
	break;
	default:
	echo "Number less than 10" . PHP_EOL;
}

$weekday = Fri1;
switch($weekday){
	case "mon":
	echo "Monday" . PHP_EOL;
	break;
	case "fri":
	echo "friday" . PHP_EOL;
	break;
	default:
	echo "others" . PHP_EOL;
}