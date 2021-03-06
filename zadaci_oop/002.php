<?php 
    declare(strict_types = 1);
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
    <title><?php

use Connection as GlobalConnection;

 echo "Zadaci 2" ?></title>
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
    <h3>OOP 2</h3>
    <!-- ZADACI -->
    <fieldset><legend>Zadatak 5</legend>
    <?php
    /*
    Napraviti trait messages sa metodama:
    ErrorMessage() vraca poruku “ Login failed“
    SuccessMessage() vraca poruku “ Successfully logged in“
    Napraviti klasu Login
    Ima metodu CheckData koja simulira logovanje korisnika.
        - Generisati random broj izmedju 0,1.
        - broj 1 znaci da je prijavljivanje uspesna, 0 znaci da nije
    Ukoliko smo uspeli da se ulogujemo treba prikazati poruku koja je definisana u SuccessMessage metodi.
    Ukoliko nije login uspesna treba prikazati poruku koja je definisana u ErrorMessage metodi.
    */
    ?>

    <?php 
    
    trait Messages {
        public function ErrorMessage() {
            return "Login failed";
        }
        public function SuccessMessage() {
            return "Successfully logged in";
        }
    }

    class Login {
        public bool $isLogged;
        use Messages;

        public function __construct(){
            $this->isLogged = boolval(rand(0, 1));
        }

        public function checkData() {
            if($this->isLogged) {
                return $this->SuccessMessage();
            } {
                return $this->ErrorMessage();
            }
        }
    }
    

    $userLogin = new Login();
    echo $userLogin->checkData();
    
    
    ?>

    </fieldset>
    <fieldset><legend>Zadatak 6</legend>
    <?php
    /*
    Napraviti abstraktnu klasu Vehicle koja moze da ima ime,kilometrazu.
    Ima predefinisane metode Name I Kilometres:
    Metoda sluzi za podesavanje kilomatraze posebno za svako vozilo I vraca kilometrazu kao integer. Kilometraza treba da bude random broj izmedju 1000, I 120000.
    Za generisanje random broja koristiti rand() php funkciju.
    Name metoda ceka jedan parametar koja moze biti iskljucivo string I sluzi da bi podesili Ime za vozilo.
    Napraviti klase Motorcycle I Car, imaju metodu Intro :
    Metoda izpisuje na ekran: ime vozila, kilometrazu posebno za svako vozilo.
    */
    ?>

    <?php 
    
    abstract class Vehicle {
        protected string $name;
        protected int $kilometers;

        public function __construct() {
            $this->kilometers = rand(1000, 120000);
        }

        public function setName($newName) {
            $this->name = $newName;
        }

        abstract public function Intro();
        // ako sam dobro razumeo, ova abstraktna funkcija nije obavezna u ovom slučaju, ovako samo obavezujemo svaki child ove klase da mora sadržati funkciju Intro
    }

    class Motorcycle extends Vehicle {
        public function Intro() {
            return $this->name . " (" . $this->kilometers . " km)";
        }
    }

    class Car extends Vehicle {
        public function Intro() {
            return $this->name . " (" . $this->kilometers . " km)";
        }
    }


    $ktm = new Motorcycle();
    $ktm->setName("KTM");
    echo $ktm->Intro();

    echo "<br>";

    $bmw = new Motorcycle();
    $bmw->setName("BMW");
    echo $bmw->Intro();
    
    
    
    ?>


    </fieldset>
    <fieldset><legend>Zadatak 7</legend>
    <?php
    /*
    Napraviti interface Car I klase Diesel I Petrol.
    Diesel I Petrol su vozila u koje mozemo da sipamo gorivo.
    Razlika izmedju Diesel I Petrol je $fuel_type.
    fuel_type moze da bude : diesel ili petrol.
    Izpisati na ekran :
        U Diesel sipamo $fuel_type
        U Petrol sipamo $fuel_type
    */
    ?>

    <?php 
    
    interface CarFuel {
        public function getFuelType();
    }
    
    class Diesel implements CarFuel {
        public string $fuel_type;

        public function __construct() {
            $this->fuel_type = "diesel";
        }

        public function getFuelType() {
            return "U Diesel sipamo " . $this->fuel_type;
        }
    }

    class Petrol implements CarFuel {
        public string $fuel_type;

        public function __construct() {
            $this->fuel_type = "petrol";
        }

        public function getFuelType() {
            return "U Petrol sipamo " . $this->fuel_type;
        }
    }


    $diesel = new Diesel();
    echo $diesel->getFuelType();

    echo "<br>";

    $petrol = new Petrol();
    echo $petrol->getFuelType();
    
    ?>

    </fieldset>
    <!-- ZADACI END -->
</body>
</html>