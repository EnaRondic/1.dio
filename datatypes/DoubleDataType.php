<?php

//Define and Printf Decimal variabled
$totalScore = 78.87;
echo  $totalScore . PHP_EOL;

//Negative Decimals
$temperature = -40.23;
echo $temperature . PHP_EOL;

//Round a double variable
$price = 4.99;
echo round($price) . PHP_EOL;

//Compare two doublw with precision 0.1= 1.87 ~ 1.97
$price = 1.87;
$bid = 1.97;
echo ( abs($price - $bid) < 0.1) ? "Accepting" : "Rejecting";