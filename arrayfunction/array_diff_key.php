<?php 

$a = array("a"=>"red","b"=>"yellow","c"=>"red","d"=>"blue");
$b = array("a"=>"red","c"=>"yellow","f"=>"red");

print_r(array_diff_key($a,$b));

?>