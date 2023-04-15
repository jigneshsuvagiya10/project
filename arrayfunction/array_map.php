<?php 

function cube($a){
    return $a*$a*$a;
}

$x = [1,2,3,4,5,6];
$y = array_map('cube',$x);

echo "<pre>";
print_r($y);

?>