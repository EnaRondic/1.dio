<?php

   //Check is file exist
$fileName = "MyFolder.txt";



if( file_exists($fileName)){
	echo "File Exists" . PHP_EOL;

	if(is_dir($fileName)){
		die("It is a Directiry not File");
	}

	//Copy FIle
	copy($fileName, "CopyFile.txt");
	copy("CopyFile.txt", "")

} else{
	echo "File / Directory does not exist" . PHP_EOL;
	die("No Such Files");
}