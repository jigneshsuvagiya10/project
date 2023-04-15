<?php 
$a=array("a"=>"cat","b"=>"dog","c"=>"tom","d"=>"tiger"); 
$b=array("a"=>"cat","b"=>"tom","lion","tiger"); 

print_r(array_intersect_assoc($a,$b));
?>