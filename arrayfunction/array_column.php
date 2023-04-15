<?php 

$arry = array(
    array(
        "id" => 1, 
        "name" => 'jignesh',
    ),
    array(
        "id" => 2, 
        "name" => 'tom',
    ),
    array(
        "id" => 3, 
        "name" => 'ben',
    ),
);

echo "<pre>";
print_r(array_column($arry,'name'));
print_r(array_column($arry,'id'));

?>