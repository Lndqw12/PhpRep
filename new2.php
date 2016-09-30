<?php
mt_srand(135);
	for ($i=0; $i<5; $i++) echo mt_rand().", ", "<br>";
echo "<br>";
	mt_srand(123);
for ($i=0; $i<5; $i++) echo mt_rand().", ";
	echo "<br>";
$f = fopen("text.txt", "rt") or die("Error");
	echo "$f","<br>";
	
	
	
$path = "c:\\windows\\system32\\drivers\\etc\\hosts";
echo $path. "<br>";
$path = "c:\\non\\existent\\file";
//Если слеши будут по одному, выдаст ошибочный порядок символов,с пробелами и пропусками
echo $path."<br>";
?>