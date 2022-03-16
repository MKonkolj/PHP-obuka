<?php 


$number = "";
$message = "";
function doStuff(int $a) {
    if($a % 2 !== 0) {
        throw new \Exception("ovo nije deljivo sa 2");
    } 
    echo "deljiv sa 2";
}

try  {
    doStuff(3);
}
catch(\Exception $ex) {
    echo $ex->getMessage();
    $number = 10/2;
}

echo "kod je nastavio";

?>