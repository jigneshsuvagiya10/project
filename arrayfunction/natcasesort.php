<?php 

$a = ['IMG3.jpg','IMG7.jpg','img1.jpg','img2.jpg','img4.jpg','img10.jpg','img21.jpg'];

natcasesort($a);
echo "<pre>";
print_r($a);
echo "<br><br>natsort<br>";
natsort($a);
print_r($a);

?>