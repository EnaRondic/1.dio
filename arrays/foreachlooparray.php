<?php

    $arr =  [ "mon", "tue", "wed", "thurs", "fri", "ssat", "sun"];

    $counter = 0;
    foreach ( $arr as $values){
    	echo "[$counter] => $values => $arr[$counter]" . PHP_EOL;

    	$counter++;
    }