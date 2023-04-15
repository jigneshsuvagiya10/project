<?php 

$a = ["apple","potato","car"];

list($fruit,$vegis,$vehical)=$a;

echo "Fruit : ".$fruit."<br>Vegis : ".$vegis."<br>Vehical : ".$vehical;

list($fruit,,$vehical)=$a;

echo "<br><br>Fruit : ".$fruit."<br>Vehical : ".$vehical;
?>