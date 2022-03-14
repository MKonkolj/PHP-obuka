<?php
include("handling.php");
session_start();
echo $_SESSION["user-id"];
echo $_SESSION["user-name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predavanje 3</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">

    <input type="text" name="ime"> <br>
    <span><?php echo $ime_error; ?></span> <br>
    <input type="text" name="prezime"> <br>
    <span><?php echo $prezime_error; ?></span> <br>
    <input type="file" name="slika"> <br>
    <button type="submit" name="form-sub"> Pošalji </button> <br>

    </form>
</body>
</html>