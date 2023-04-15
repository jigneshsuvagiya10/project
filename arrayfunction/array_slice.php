<?php 

$a = array("a", "b", "c", "d", "e");

print_r($a);
echo "<br>remove first two value : <br> ";
print_r(array_slice($a,2));
echo "<br>second last value : <br> ";
print_r(array_slice($a,-2,1));
echo "<br>first three value : <br> ";
print_r(array_slice($a,0,3));

?>