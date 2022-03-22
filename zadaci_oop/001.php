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
    <h3>OOP</h3>
    <!-- ZADACI -->
    <fieldset><legend>Zadatak 1</legend>
    <?php
    // Napraviti klasu User
    // User ima sledeca svojstva: ime,email adresa.
    // User ima metodu koja ce se izvrsiti u tom trenutku kada se napraviti objekat, metoda ce podesiti vrednosti za sva svojstva.
    // Ima metodu Informations koja ce ispisati sve o User-u na ekran
    ?>
    <?php 

    class User {

        private $ime;
        private $email;
        private $adresa;

        function __contruct() {
            $this->ime = "Mladen";
            $this->email = "mladen@konkolj.com";
            $this->adresa = "Gogoljeva 10";
        }

        public function Informations() {
            echo $ime;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $adresa;
            echo "<br>";
        }

    }


    ?>


    </fieldset>
    <fieldset><legend>Zadatak 2</legend>
    <?php
    // Napraviti klasu Connection koja ce kreirati vezu izmedju baze I skripte.
    // Ukoliko smo uspesno kreirali vezu ispisati na ekran “ Connected successfully” .
    ?>



    </fieldset>
    <fieldset><legend>Zadatak 3</legend>
    <?php
    // Prepisati sledeci code tako da bi radio bez greske :
    // class Car {
    //     private $broj_registracije = '222-33-44';
    //     public $brend = 'bmw';
    //     private function Informations() {
    //         echo $this->broj_registracije;
    //         echo "<br>";
    //         echo $this->brend;
    //     }
    // }
    //     $car = new Car();
    //     $car->Informations();
    ?>



    </fieldset>
    <!-- ZADACI END -->
</body>
</html>