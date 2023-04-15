<?php 

$a = array("a"=>"red","b"=>"yellow","c"=>"red","blue");
$b = array("a"=>"red","c"=>"yellow","red");

print_r(array_diff_assoc($a,$b));

?>