<?php 

foreach (range(0,100,10) as $num) {
    echo $num."<br>";
}
echo "<br><br>";
foreach (range(0,5) as $num) {
    echo $num."<br>";
}
echo "<br><br>";
foreach (range('a','e') as $xyz) {
    echo $xyz."<br>";
}
echo "<br><br>";
foreach (range('d','a') as $xyz) {
    echo $xyz."<br>";
}

?>