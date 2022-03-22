<?php 

unset($_COOKIE["user_visited_the_site"]);
// setcookie("user_visited_the_site", null, -1, "/");
header("Location: dashboard.php");

?>