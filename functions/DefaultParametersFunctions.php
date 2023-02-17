<?php

declare(strict_types=1);
function printEvenNumbers ($skipNumber = -1, int $limit){
for($index = 0; $index <= $limit; $index++ ){
	if($index%2==0){
		echo "Even Number: $index" . PHP_EOL;
	}
}

}



function printOddNumbbers(int $limit, $skipNumber = -1){
for ($index = 0; $index <= $limit; $index++){
	if($skipNumber === $index){
		continue;
	}
	if($index%2!=0){
		echo "Odd Number: $index" . PHP_EOL;
	}
}

  }
  printEvenNumbers(10);
  