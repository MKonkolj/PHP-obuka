<?php
session_start();



$username = "Admin";
$password = "1234";
$login_error = "";


if(isset($_POST["login"])) {
    if ($_POST["username"] == $username && $_POST["password"] == $password) {

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["logged-in"] = true;
        header("location: 005_home.php");

    } else {
        $login_error = "Username i password koji ste uneli nije tačan!";
    }
}

if(isset($_POST["logout"])) {
    $_SESSION["logged-in"] = false;
    header("location: 005.php");
};

?>