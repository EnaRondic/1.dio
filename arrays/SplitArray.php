<?php


   $students = "John, Parker, Amit, Jacob, JIm";
   $studentArr = explode(",", $students);
   print_r($studentArr);

   //Array to string
   $studentList = implode(",", $studentArr);
   echo $studentList . PHP_EOL;

     $studentArr = explode(",", $students);
     print_r($studentArr);