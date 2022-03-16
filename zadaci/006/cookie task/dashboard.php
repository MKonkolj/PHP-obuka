<!-- Napraviti cookie.php , dashboard.php I delete.php stranice. Na cookie.php potrebno je napraviti kolacic sa imenom “user_visited_the_site" vrednost treba da bude boolean, na dashboard.php proveriti da li postoji kolacic ako jeste onda ispisati njegov vrednost, ako korisnik poseti delete.php stranicu treba da se ukloni kolacic. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie maker</title>
</head>
<body>


    <?php 
        if(isset($_COOKIE["user_visited_the_site"])) {
            echo "Cookie = ".$_COOKIE["user_visited_the_site"];
        } else {
            echo "Nema kolačića";
        }
    ?>

    <br>
    <a href="cookie.php">Dodaj kolačić</a>
    <br>
    <a href="delete.php">Obriši kolačiće</a>

    <?php var_dump($_COOKIE) ?>

</body>
</html>