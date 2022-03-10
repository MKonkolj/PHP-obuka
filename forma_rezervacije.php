<?php
    // Napraviti stranicu rezervacije, stranica ima formu koja POST metodom salje podatke handling.php stranici.
    // Forma ima sledeca polja:
    //  - ime
    //  - prezime
    //  - select lista ( Hotel1,Hotel2,Hotel3,Hotel4) podesiti da default bude Hotel1
    //  - datum ( input type date)
    //  - submit button
    // Na handling.php treba proveriti da li je korisnik kliknuo na submit button, nakon toga proveravati da li sva polja postoje u $_POST nizu.
    // Polje ime I prezime treba da imaju minimum 3 karaktera. Ukoliko je sve u redu potrebno je cuvati podatke u nizu $reservations koje je korisnik uneo. Ukoliko ne prodje validacija, error poruke treba cuvati u $errors nizu I prikazati ih sa for petljom.
    // $reservations treba da izgleda ovako:
    //‘datum’ => array( ‘hotel’=>$hotel,’ime’=>$ime,’prezime’=>$prezime);
    // sa for petljom prikazati podatke u nizu.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervacije</title>
</head>
<body>
    
</body>
</html>