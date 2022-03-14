<?php

include ("login-handling.php");

?>

<html>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">

    <input type="email" name="email"> <br>
    <input type="password" name="password"> <br>

    <input type="submit" value="Login" name="login-user">

</form>


</html>