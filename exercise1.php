<?php
$array = array(
    "abc" => "value for key abc",
    "xyz" => "value for key xyz",
    100   => -100,
    -100  => 100,
);

echo reset($array);