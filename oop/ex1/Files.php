<?php
class Files{
	function displayConttent($fileName){
		if(!file_exsts($filename))
		{
			echo "$filename does not exists" . PHP_EOL;
			return;
		}
		echo file_get_contents($fileName) . PHP_EOL;

	}
	function getContent($fileName) : string{
if(!file_exsts($filename))
		{
			echo "$filename does not exists" . PHP_EOL;
			return;
		}
		echo file_get_contents($fileName) . PHP_EOL;
	}
	$content = file_get_contents($fileName);
	return $content;
}
$file1 = new Files();
$file1 ->displayConttent("Test.txt");
echo "Here is your file content:" . $file1->getContent("test.txt");