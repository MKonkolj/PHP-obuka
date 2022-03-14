<?php 
session_start();

if(!isset($_SESSION["logged-in"])) {
    header("location : login.php");
} else {
    echo "Welcome!";
}



?>