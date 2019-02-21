<?php
$arr = [1,2,3,4];
print_r($arr);
echo "<br>";
//unsetting $arr
unset($arr);
print_r($arr); //$arr is deleted therefore if we try to print it on the screen then nothing will print;
echo "<br>";
$arr = [1,2,3,4];
print_r($arr);
echo "<br>";
//unsetting $arr[0]
unset($arr[0]);
print_r($arr);
echo "<br>";
$fp = fopen('test.txt'); 
  
// writing on a file named gfg.txt 
fwrite($fp, 'A computer science portal for geeks!'); 
fclose($fp); 
  
// using unlink() function to delete a file 
unlink('test.txt'); 
?>