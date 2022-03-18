<?php
include("connect_db.php");
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
    <?php 


    $proizvodi = [
        "Across Vape Roulette RTA" => 2999,
        "Ambition Mods Ripley MTL-RDL RDTA" => 5499,
        "Aspire Kumo RDTA" => 5499,
        "Aspire Neeko MTL RTA" => 4499,
        "Digiflavor Siren V4 MTL RTA" => 3499,
        "HellVape Dead Rabbit V2 RDA" => 3799,
        "Innokin Ares 2 MTL RTA" => 4499,
        "Vandy Vape Berserker V2 MTL RTA" => 4499,
        "Vandy Vape Kylin Mini V2 RTA" => 4599,
        "ZQ Vapor Trio RTA" => 3199,
        "GeekVape Zeus Nano" => 2799,
        "Innokin Z Force" => 3599,
        "Horizontech Sakerz" => 4499,
    ];
    var_dump($proizvodi);

    function setProizvodi($proizvodi) {
    
        $db = connect();
    
        foreach($proizvodi as $ime => $cena) {
            $ime = mysqli_real_escape_string($db, $ime);
            $cena = mysqli_real_escape_string($db, $cena);
    
            $sql = " INSERT proizvodi(ime, cena) VALUES ('$ime', '$cena') ";
            
            if(mysqli_query($db, $sql)) {
                echo "Success";
                echo "<br>";
            } else {
                echo "query error: ".mysqli_error($db);
                echo "<br>";
            };
        }
    }
    // setProizvodi($proizvodi);
    
    
    ?>


    </fieldset>
    <fieldset><legend>Zadatak 3</legend>
    <!-- 
    Izkoristiti tabelu proizvodi iz prethodnog zadatka :
    - Napisati query koji ce sortirati rezultate prema ceni ( ASC )
    - Sa count funkcijom izracunati koliko imamo ukupno proizvoda u tabeli I ispisati na ekran.
    - Ispisati na ekran proizvode koji imaju manju cenu od 2500
    - Ispisati na ekran prosecnu cenu svih proizvoda sa AVG funkcijom.
    -->

    <?php 
    
    function getAndSortProizvoda () {
        $db = connect();
        $sql = " SELECT ime, cena FROM proizvodi ORDER BY cena ASC ";
        $run = mysqli_query($db, $sql);

        while($row = mysqli_fetch_assoc($run)) {
            echo $row["cena"]." rsd - ".$row["ime"]."<br>";
        }


    }

    function getUkupnoProizvoda() {
        $db = connect();
        $sql = " SELECT count(ime) as broj FROM proizvodi ";
        $run = mysqli_query($db, $sql);
        $ukupno = mysqli_fetch_assoc($run);

        return "<strong>Ukupno</strong> ima ".$ukupno["broj"]." proizvoda.";
    }

    function getJeftinije3500() {
        $db = connect();
        $sql = " SELECT ime FROM proizvodi WHERE cena < 3500 ";
        $run = mysqli_query($db, $sql);
        
        while($row = mysqli_fetch_assoc($run)){
            echo "- ".$row["ime"]."<br>";
        };
    }

    function getProsecnaCena() {
        $db = connect();
        $sql = " SELECT avg(cena) as prosek_cena FROM proizvodi ";
        $run = mysqli_query($db, $sql);
        $cena = mysqli_fetch_assoc($run);

        return "<strong>Prosečna cena</strong> svih proizvoda je ".$cena["prosek_cena"]." rsd.";
    }


    echo "<strong>Sortirani proizvodi:</strong>";
    echo "<br>";
    getAndSortProizvoda ();
    echo "<br>";
    echo getUkupnoProizvoda();
    echo "<br>";
    echo "<br>";
    echo "<strong>Jeftini od 3500 rsd:</strong>";
    echo "<br>";
    getJeftinije3500();
    echo "<br>";
    echo getProsecnaCena();

    
    ?>

    </fieldset>
    <fieldset><legend>Zadatak 4</legend>
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
    <fieldset><legend>Zadatak 5</legend>
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
    <fieldset><legend>Zadatak 6</legend>
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