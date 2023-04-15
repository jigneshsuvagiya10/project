<?php 

$a = array("cat","dog","lion");
$b = array("cat"=>1,"dog"=>2,"lion"=>1);

print_r(array_flip($a));
echo "<br>";
print_r(array_flip($b));

?>