<?php

  file_put_contents("Newfile.txt", "Some more new text/r/n", FILE_APPEND);
  $fileHandler = fopen("newFile.txt", "r";
$content = fread($fileHandler, filesize("NewFile.txt"));
echo $content . PHP_EOL;
fclose($fileHandler);