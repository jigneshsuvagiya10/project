<?php 

$a = array(0,100,30,10);
$b = array(1, 9, 2, 4);
array_multisort($a,$b);
// array_multisort($b);

print_r($a);
echo "<br>";
print_r($b);

?>