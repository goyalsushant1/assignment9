<?php
//case Insensitive therefore prints string before the matched string
echo stristr("HelLo world", "ll", true).'<br>';

// Case Insensitive with no value passed as third argument therefore again prints string after the matched string,if no value passed as third argumant then it is false by default.
echo stristr("Hello world", "ll").'<br>';
echo stristr("Hello world", "ll", false).'<br>';

//case Insensitive therefore prints string before the matched string but in this case , there is no matched string so it doesn't print anything 
echo strstr("HelLo world", "ll").'<br>';
echo strstr("Hello world", "ll",true).'<br>';
?>