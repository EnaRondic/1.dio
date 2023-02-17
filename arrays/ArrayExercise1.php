<?php

$employee = [100, 101, 102];
foreach($employee as $emp){
	echo "EmpID: $emp" . PHP_EOL;
}

$emp_details = [
	"100" =>
	[
		"Name" => "John",
		"Job" => "PHP Developer"
	],
	[
		"Name" => "Amit",
		"Job" => "PHP Senior Developer"
	],
	"102" =>
	[
		"Name" => "Jim",
		"Job" => "Web Designer"
	]

];

foreach($emp_details as $key => $value){
	foreach($value as $emp1){
		echo $emp1 . PHP_EOL;
	}
}