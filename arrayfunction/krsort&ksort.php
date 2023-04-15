<?php 

$arr = array('c'=>"apple",'d'=>"banana",'a'=>"cherry",'b'=>"mango");

echo "<pre>";
echo "krsort <br>";
krsort($arr);
print_r($arr);

echo "ksort <br>";
ksort($arr);
print_r($arr);

?>