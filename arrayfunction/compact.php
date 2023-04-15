<?php 

$state = "Gujrat";
$city = "Ahmedabad";
$event = "party";

$adress = array("state","city");
$result = compact("event",$adress);

echo "<pre>";
print_r($result);

?>