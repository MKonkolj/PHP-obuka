<?php
include("005_check_login.php");
if($_SESSION["logged-in"] !== true) {
    header ("location: 005.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<style>
    * {
        font-family: 'Inconsolata', monospace;
    }
</style>
<body>
    <h1>Welcome <?php echo $_SESSION["username"] ?>!</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <button type="submit" name="logout">Log out</button>
    </form>
</body>
</html>