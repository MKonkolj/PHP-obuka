<!-- 
    Na handling.php treba proveriti da li je korisnik kliknuo na submit button, nakon toga proveravati da li sva polja postoje u $_POST nizu.
    Polje ime I prezime treba da imaju minimum 3 karaktera. Ukoliko je sve u redu potrebno je cuvati podatke u nizu $reservations koje je korisnik uneo. Ukoliko ne prodje validacija, error poruke treba cuvati u $errors nizu I prikazati ih sa for petljom.
    $reservations treba da izgleda ovako: 
    ‘datum’ => array( ‘hotel’=>$hotel,’ime’=>$ime,’prezime’=>$prezime);
    sa for petljom prikazati podatke u nizu.
-->

<?php

$errors = [];

if (isset($_POST["submit-reg"])) {

    if (isset($_POST["ime"])
    && isset($_POST["prezime"])
    && isset($_POST["hotel"])
    && isset($_POST["datum"]))
    {

        if (strlen($_POST["ime"]) < 3) {

            array_push($errors, "Polje ime treba da ima bar 3 karaktera!");

        } elseif (strlen($_POST["prezime"]) < 3) {

            array_push($errors, "Polje prezime treba da ima bar 3 karaktera!");

        } elseif (strlen($_POST["datum"]) == "") {

            array_push($errors, "Morate odabrati datum u budućnosti!");

        }
    }

    if(count($errors) === 0) {

        $reservations[] = [$_POST["datum"] => ["hotel" => $_POST["hotel"], "ime" => $_POST["ime"], "prezime" => $_POST["prezime"]]];
        
        echo "Your reservations:<br>";
        echo "<ol>";
        for ($i=0; $i < count($reservations); $i++) { 
            echo "<li>";
            echo "At ".$reservations[$i][array_keys($reservations[$i])[0]]["hotel"];
            echo " on ".array_keys($reservations[$i])[0];
            echo " for ".$reservations[$i][array_keys($reservations[$i])[0]]['ime']." ".$reservations[$i][array_keys($reservations[$i])[0]]['prezime'];
            echo "</li>";
        };
        echo "</ol>";

    } elseif (count($errors) > 0) {

        echo "Errors: <br>";
        foreach ($errors as $error) {
            echo "$error <br>";
        }

    }

}


?>
<div><a href="004_form_rezervacije.php">Nazad na rezervacije</a></div>

