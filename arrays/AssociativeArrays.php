<?php

  //In Associative arrays, you specific the index
//index => value


//Indexed array
$arr = ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"];
var_dump($arr);
foreach($arr as $value){
	echo $value . PHP_EOL;
}

//Associative array
$arr = [0 => "Mon",1 => "Tues",2 => "Wed",3 => "Thurs",4 => "Fri", 5=>"Sat",6 => "Sun"];
var_dump($arr);
foreach ($arr as $value){
	echo $value . PHP_EOL;

}
foreach($arr as $key => $value){
	echo $key . "=>" . $value . PHP_EOL;
 }

 //Print all the keys
 print_r(array_keys($arr));

 //Access only the keys
 foreach(array_keys($arr) as $key){
 	echo $key . PHP_EOL;
 }

 //Acess the value only
 foreach($arr as $value){
 	echo $value . PHP_EOL;
 	 }

 	 $userDetails = [
 	 	"John" => "john@gmail.com",
 	 	"Jenny" => "jenny@gmail.com",
 	 	"Ajit" => "ajit@gmail.com", 
 	 		 ];
 	 	var_dump($userDetails);
 	 	echo $userDetails["John"] . PHP_EOL;
 	 	echo $userDetails["Jenny"] . PHP_EOL;
 	 	echo $userDetails["Ajit"] . PHP_EOL;

 	 	$userDetails["mary"] = "mary@gmail.com";
 	 	var_dump($userDetails);
 	 	echo $userDetails[0] . PHP_EOL;

 	 	//Guess the output
 	 	$userDetails[] = ["Jane" => "jane@gmail.com"];
 	 	var_dump($userDetails);

