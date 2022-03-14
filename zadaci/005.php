<?php
include("005_check_form.php");
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
    <title><?php echo "Zadaci 2" ?></title>
</head>
<style>
    * {
        font-family: 'Inconsolata', monospace;
    }
    body {
        width: 80%;
        margin: 0 auto;
        padding: 2rem 0;
        background: linear-gradient(to right, #355c7d, #6c5b7b, #c06c84);
    }
    fieldset {
        margin: 1rem 0;
        background: white;
        border: 2px solid #C06C84;
        border-top: 2.5rem solid white;
    }
    legend {
        color: #355C7D;
        font-size: 0.875rem;
        font-weight: 700;
    }
    h3 {
        color: white;
    }
    form {
        display: flex;
        flex-direction: column;
        width: 200px;
        gap: .5rem;
    }
</style>
<body>
    <h3>FORME I LOGIN</h3>
    <!-- ZADACI -->
    <fieldset><legend>Task 3</legend>
    <?php
    // Napraviti formu ( ime , prezime, avatar ) , forma salje podatke na trenutni URL.
    // Formu proverava check_form.php stranica. :
    //     - Ime i prezime ne moze ostati prazna.
    //     - Proveriti velicinu fajla, I zabraniti upload fajla koji su veci od 2mb.
    //     - Proveriti tip fajla, korisnik moze samo da uploaduje sliku.
    //     - Pre uploada generisati novo ime fajlu : [prethodno ime ]__[danasnji datum]__[ekstenzija]
    //     - error poruke prikazati na html stranici ispod input polja.
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">

    <input type="text" name="ime">
    <input type="text" name="prezime">
    <input type="file" name="avatar">
    <input type="submit" name="submit">

    </form>


    </fieldset>
    <fieldset><legend>Task 4</legend>
    <?php
    // Napraviti login.php stranicu sa login formom (username,password).
    // U check_login.php treba definisati username I password.
    // U check_login proveriti da li je korisnik upisao nesto u password I username polja.
    // Proveriti da li je uneo tacne podatke.
    // Ukoliko je sve u redu napraviti sesiju (logged_in,username) I poslati korisnika na home.php. U sesiju username cuvamo njegov username. Na home.php prikazati sledeci tekst:
    //     Welcome [username] .
    // Na check_login.php napraviti funkcionalnost za logout.
    ?>



    </fieldset>
    <fieldset><legend>Task 5</legend>
    <?php
    // Rad sa datumima:
    //  - prikazati danasnji datum.
    //  - prikazati godinu
    //  - prikazati mesec
    //  - prikazati dan
    //  - Prikazati datum u ovom formatu: dan,mesec,godina.
    //  - Prikazati datum u ovom formatu: mesec,dan,godina.
    ?>



    </fieldset>
    <!-- ZADACI END -->
</body>
</html>