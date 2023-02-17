<?php

   //Open a File
   //Read file cintent
   //Close the file


   //Method 1
   $fileName = "content.txt";

   //Read the file
   $content = file_get_contents($fileName);

   //Print the content of the file
   echo $content . PHP_EOL;

   //ethod 2
   $fileHandler = fopen($fileName, "r");
   $fileSize = fileSize($fileName); 


   $content = fread($fileHandler, $fileSize);
   echo $content . PHP_EOL;
   fclose($fileHandler);

   $fileHandler = fopen($fileName, "w") or die("Unabke to Write the file");

   fwrite($fileHandler, "This is a modifide content");
   fclose($fileHandler0);

   $fileName = "NewFile.txt";
   file_put_contents($fileName1, "This is a modified Content!");

   if( file_exists($fileName)){
   	if(is_file($fileName)){
   		
   	}
   }
