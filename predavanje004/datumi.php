<?php 

echo date("Y-m-d", strtotime("now +1 day"));


$days_eng = ["monday"];
$days_srb = ["ponedeljak"];

$index = array_search("monday", $days_eng);
echo $index;

echo $days_srb["$index"];



?>