<?php 

session_start();

$_SESSION["user-id"] = 1;
$_SESSION["user-name"] = "Hammond";

unset($_SESSION["user-id"]);


?>