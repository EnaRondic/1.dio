
<?php

//Saple 1
//Define a functin
// Function declaration
function add() {
	//Function Body
	$firstvalue = 10;
	$secondvalue = 20;
	$total = $firstvalue + $secondvalue;
	echo $total;

}

//Calling the function
add();

//Sample 2
/*
function add(){
	echo 'Duplicate function';
}
*/
//Sample 3
welcome_message();
function welcome_message(){

	echo "Welcome to PHP function";
}