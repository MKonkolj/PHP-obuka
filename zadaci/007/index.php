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
</style>
<body>
    <h3>MySQL od 17.03.</h3>
    <!-- ZADACI -->
    <fieldset><legend>Zadatak 2</legend>
    <!-- 
    Napraviti tabelu proizvodi ( id, ime,cena )
    Napraviti asojicativni niz $proizvodi (ime proizvoda, cena )
    Napisati skriptu koja ce popuniti tabelu proizvodi sa podacima koji su u asocijativnom nizu. 
    -->


    </fieldset>
    <fieldset><legend>Zadatak 2</legend>
    <!-- 
    Izkoristiti tabelu proizvodi iz prethodnog zadatka :
    - Napisati query koji ce sortirati rezultate prema ceni ( ASC )
    - Sa count funkcijom izracunati koliko imamo ukupno proizvoda u tabeli I ispisati na ekran.
    - Ispisati na ekran proizvode koji imaju manju cenu od 2500
    - Ispisati na ekran prosecnu cenu svih proizvoda sa AVG funkcijom.
    -->


    </fieldset>
    <fieldset><legend>Zadatak 2</legend>
    <!-- 
    Napraviti tabelu country ( city,country) .
    Popuniti tabelu sa sledecim podacima:
    Belgrade Serbia
    Novi Pazar Serbia
    Berlin Germany
    Franktfurk Germany
    Copenhagen Denmark
    Ispisati na ekran koliko ima gradova x zemlja. Na primer :
    Serbia 2
    -->


    </fieldset>
    <fieldset><legend>Zadatak 2</legend>
    <!-- 
    Napraviti tabelu categories ( category_id,product_id (foreign key sa tabele proizvodi),
    category_name)
    Popuniti tabele sa podacima.
    Povezati tabele sa JOIN,LEFT JOIN,RIGHT JOIN I ispisati na ekran ime proizvoda cenu I
    kategoriju.
    Povezati tabele sa JOIN I ispisati na ekran ime proizvoda,cenu, I kategoriju ali samo one
    proizvode koji imaju vecu cenu od 0. 
    -->


    </fieldset>
    <fieldset><legend>Zadatak 2</legend>
    <!-- 
    Napraviti jednu formu za kreiranje proizvoda na index.php
    Izkoristiti tabelu proizvodi I categories .
    Forma :
    - Ime proizvoda
    - Cena
    - Dropdown: ovde se izlistavaju kategorije
    Na form submit saljemo podatke sa POST metodom fajlu functions.php
    u functions.php sa CreateNewProduct funkcijom upisujemo podatke u bazu.
    Konekcija sa bazom treba da bude u connection.php fajlu I connectToDatabase() funkciji.
    -->


    </fieldset>
    <!-- ZADACI END -->
</body>
</html>