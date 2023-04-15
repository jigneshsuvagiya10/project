<?php 

$arry = array("fiRST" => 1 , "seCOnd" => 4);

echo "<pre>";
print_r(array_change_key_case($arry,CASE_UPPER));
print_r(array_change_key_case($arry,CASE_LOWER));
echo "</pre>";

?>