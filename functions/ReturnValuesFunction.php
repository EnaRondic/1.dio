<?php

function add($a, $b): int{
	$addition = $a + $b;
	return $addition;
}
echo "Result:" . add(1,2) . PHP_EOL;

function getEvenNUmbers($limit): array{
	$returnArr = [];
	for($index = 0; $index <= $limit; $index++){
		if($index%2==0){
			$returnArr[] = $index;
		}
	}
	return $returnArr;
}
$evenNumbers = getEvenNumbers(10);
print_r($evenNumbers);