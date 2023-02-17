<?php

class Bank{
	public $accno;
	public $name;
	public $balance = 0;
	function depositAmount($amt){
		$this ->balance = $this->balance + $amt;

	}
	function deductAmount($amt){
		if($this ->balance <=0){
			echo "no ballance in the account" . PHP_EOL;
			return;
		}
		if($this-> balance <= $amt){
			echo"Requested amount is greater than Balance" . PHP_EOL;
			return;
		}

	}
	function checkBalancer(){
		echo "Your account balance: $this->balance" . PHP_EOL;

	}
}

$bank1 = new Bank();
$bank1 ->accno=101;
$bank1->name= "John, SMith";
$bank1->balance = 500;
$bank1->checkBalance();
$bank1->depositAmount(500);
$bank1->checkBalance();
$bank1->deductAmount(100);
$bank1->checkBalance();
$bank1->deductAmount(100);