<!-- Na cookie.php potrebno je napraviti kolacic sa imenom “user_visited_the_site" vrednost treba da bude boolean -->
<?php 

setcookie("user_visited_the_site", "true", time() + 30, "/");
header("Location: dashboard.php");

?>