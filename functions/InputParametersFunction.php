<?php

  declare(strict_types=1);

  function printOddNumbbers(int $limit, $skipNumber){
for ($index = 0; $index <= $limit; $index++){
	if($index === $skipNumber){
		continue;
	}
	if($index%2!=0){
		echo "Odd Number: $index" . PHP_EOL;
	}
}

  }
  printOddNumbbers(20, "3");