<?php 

$arr = array('f1'=>"apple",'f2'=>"banana",'f3'=>"apple",'f4'=>"mango",'f5'=>"apple");

while ($fname = current($arr)) {
    if ($fname == "apple") {
        echo "<br> KEY is : ".key($arr);
    }
    next($arr);
}

?>