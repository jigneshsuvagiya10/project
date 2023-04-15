<?php 

function odd($a){
    if ($a%2 != 0) {
        return $a;
    }
}
function even($a){
    if ($a%2 == 0) {
        return $a;
    }
}

$x = array('a'=>1,'b'=>2,"c"=>3,'d'=>4);
$y = array(2,3,4,5,6,7,8);

print_r(array_filter($x,"odd"));
echo "<br>";
print_r(array_filter($x,"even"));
echo "<br>";
echo "<br>";
print_r(array_filter($y,"odd"));
echo "<br>";
print_r(array_filter($y,"even"));

?>