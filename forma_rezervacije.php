<!--
    Napraviti stranicu rezervacije, stranica ima formu koja POST metodom salje podatke handling.php stranici.
    Forma ima sledeca polja:
     - ime
     - prezime
     - select lista ( Hotel1,Hotel2,Hotel3,Hotel4) podesiti da default bude Hotel1
     - datum ( input type date)
     - submit button
    Na handling.php treba proveriti da li je korisnik kliknuo na submit button, nakon toga proveravati da li sva polja postoje u $_POST nizu.
    Polje ime I prezime treba da imaju minimum 3 karaktera. Ukoliko je sve u redu potrebno je cuvati podatke u nizu $reservations koje je korisnik uneo. Ukoliko ne prodje validacija, error poruke treba cuvati u $errors nizu I prikazati ih sa for petljom.
    $reservations treba da izgleda ovako: 
    ‘datum’ => array( ‘hotel’=>$hotel,’ime’=>$ime,’prezime’=>$prezime);
    sa for petljom prikazati podatke u nizu. 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervacije</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        main {
            height: 100vh;
            display: grid;
            place-items: center;
            background: url("https://picsum.photos/1920/1080") no-repeat;
            background-size: cover;
        }
        .container {
            padding: 2rem;
            border-radius: 10px;
            background: white;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <h3>Rezervacije</h3>
            <form action="forma-handleing.php" method="POST">
                <input type="text" name="ime" placeholder="Ime" />
                <input type="text" name="prezime" placeholder="Prezime" />
                <select type="select">
                    <option value="volvo" selected="selected">Hotel1</option>
                    <option value="saab">Hotel2</option>
                    <option value="mercedes">Hotel3</option>
                    <option value="audi">Hotel4</option>
                </select>
                <input type="date"/>
                <button type="submit" name="submit-reg" >Rezerviši</button>
            </form>
        </div>
    </main>
</body>
</html>