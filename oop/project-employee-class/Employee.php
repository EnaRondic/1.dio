<?php

class Employee{

  public $id;
  public $name;
  public $workingHoursPerDay = 8;
  public $hourlyRate = 15;
  public $totalLeaveTaken;
  public $workingDays;

  function getSalaryAmount($totalDays) : int{
  	$this->workingDays = $totalDays - $this->totalLeaveTaken;
  	$salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
  	return $salary;

  	  }


}

$emp1 = new Eployer();
$wmp1 -> id = 101;
$emp1->name = "John, SMith";
$emp1->totalLeaveTaken = 4;
$salary = $emp1->getSalaryAmount(20);
echo "$emp1 -> name has worked for $emp1 ->workingDays and taken $emp1 ->totalLeaveTaken leavs." . PHP_EOL;
echo "$emp1 ->name salary is $salary" . PHP_EOL;



$emp2 = new Eployer();
$wmp2 -> id = 102;
$emp2->name = "Jacob";
$emp2 ->totalLeaveTaken = 2;
$salary = $emp1->getSalaryAmount(20);
echo "$emp2 -> name has worked for $emp2 ->workingDays and taken $emp2 ->totalLeaveTaken leavs." . PHP_EOL;
echo "$emp2 ->name salary is $salary" . PHP_EOL;