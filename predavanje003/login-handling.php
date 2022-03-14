<?php
session_start();

$email = "admin@admin.com";
$password = 1234;

if(isset($_POST["login-user"])) {
    if($_POST["email"] == $email && $_POST["password"] == $password) {

        $_SESSION["logged-in"] = true;
        header("location: dashboard.php");
    }
}

?>