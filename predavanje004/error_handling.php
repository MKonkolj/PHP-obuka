<?php 

$number = "";
$message = "";

// $number = 5/0;

try  {
    $number = 5/0;
}
catch(Throwable $ex) {
    // echo $ex;
    $message = "Došlo je do greške...";
    $number = 10/2;
}

echo "kod je nastavio";

echo $message;



?>