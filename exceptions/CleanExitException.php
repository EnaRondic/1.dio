<?php

    try{
    	throw new Exception("Raise an Exception");
    }catch(Exception $e){
    	echo $e->getMessage();
    }finally{
    	echo "This block can be as a cleanup section". PHP_EOL;
    }