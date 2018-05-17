<?php 

print "<br>start";
$file = fopen("test.txt","w"); 
echo fwrite($file,"Hello World. Testing!"); 
fclose($file); 
?>