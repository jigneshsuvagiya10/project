<?php 

$a = [1,5,6];
$b = [1=>'a',2=>'b'];

function check($x){
if (array_is_list($x)) {
    return $x;
}
else{

    echo "array is not list";
}
}

print_r(check($a));
echo "<br>";
echo "<br>";
print_r(check($b));

?>