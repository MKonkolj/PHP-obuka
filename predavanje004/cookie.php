<?php 

setcookie("logged_in", "true", time() + 60, "/", );

// if(isset($_COOKIE["logged_in"])) {


//     echo "Beware of the cookie monter";


// }

unset($_COOKIE["logged_in"]);



?>