<?php
session_start();



$username = "Admin";
$password = "1234";
$login_error = "";


if(isset($_POST["login"])) {
    if ($_POST["username"] == $username && $_POST["password"] == $password) {

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["logged-in"] = true;
        header("location: home.php");

    } else {
        $login_error = "Username i password koji ste uneli nije tačan!";
    }
}

?>