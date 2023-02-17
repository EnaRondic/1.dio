<?php

   declare(strict_types=1);

   function calculator(int $a, int $b, string $operation = "all")
   {

      $operation = strtolower($operation);

      switch ($operation) {
      	case 'add' :
      	   $result = $a + $b;
      	   echo "Add: $result" . PHP_EOL;
      	break;
      	case 'sub' :
      	$result = $a - $b;
      	echo "Substract: $result" . PHP_EOL;
      	break;
      	case 'multiple' :
      	$result = $a * $b;
      		echo "multiple: $result" . PHP_EOL;
      	break;
      	case 'divide' :
      	$result = $a / $b;
      		echo "Divide: $result" . PHP_EOL;
      	break;

      	default:
      	 $result = $a + $b;
      	 echo "Add: $result" . PHP_EOL;
      	 	$result = $a - $b;
      	 	echo "Substract: $result" . PHP_EOL;
      	 	$result = $a * $b;
      	 	echo "multiple: $result" . PHP_EOL;
      	 	$result = $a / $b;
      	 	echo "Divide: $result" . PHP_EOL;
      	 	break;
      }

   }
   calculator(1,2);
   calculator(1, 2, "add");
   calculator(1, 2, "sub");
   calculator(1, 2, "multiply");
   calculator(1, 2, "divide");