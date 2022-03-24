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

        public function __construct() {
            $this->ime = "Mladen";
            $this->email = "mladen@konkolj.com";
            $this->adresa = "Gogoljeva 10";
        }

        public function Informations() {
            echo $this->ime;
            echo "<br>";
            echo $this->email;
            echo "<br>";
            echo $this->adresa;
            echo "<br>";
        }

    }

    $user = new User();
    $user->Informations();


    ?>


    </fieldset>
    <fieldset><legend>Zadatak 2</legend>
    <?php
    // Napraviti klasu Connection koja ce kreirati vezu izmedju baze I skripte.
    // Ukoliko smo uspesno kreirali vezu ispisati na ekran “ Connected successfully” .
    ?>

    <?php 
    
    class Connection {

        private $host;
        private $user;
        private $password;
        private $database;

        public $conn;

        public function __construct() {
            $this->host = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->database = "zadaci";

            $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        }

        public function GetStatus() {
            if($this->conn) {
                echo "Connected successfully";
            } else {
                echo "Connection failed";
            }
        }
    }

    $test = new Connection;
    $test->GetStatus();
    
    
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

    <?php 

    class Car {

        private $broj_registracije = '222-33-44';
        public $brend = 'bmw';

        public function Informations() {

            echo $this->broj_registracije;
            echo "<br>";
            echo $this->brend;

        }
    }

        $car = new Car();
        $car->Informations();
        // funkcija je bila private pa nije mogla da se pozove van objekta

    ?>


    </fieldset>
    <fieldset><legend>Zadatak 4</legend>
    <?php
    /*Napraviti klasu Developer koja ima sledeca svojstva:
        ime,
        prezime,
        stack

    Klasa BackendDeveloper, FrontEndDeveloper nasledjuju sva svojstva od Developera i Imaju dodatno svojstvo “introduce” I konstruktor koja ce podesiti vrednost za “introduce”.
        “introduce” za BackendDevelopera : “Backend Developer is working on the server side”;
        “introduce” za FrontEndDevelopera : “Front end developer is working on the client side;

    Klasa PHP nasledjuje sva svojstva od BackendDevelopera, klasa JavaScript sva svojstva od
    FrontEndDevelopera.

    Klasa PHP I JavaScript imaju konstruktor koja ce podesiti ime,prezime, stack.

    “stack” je niz, I treba da ima vrednosti [‘php’,’mysqli’] za PHP klasu, za JavaScript klasu
    [‘javascript’,’html’]

    Klasa PHP I JavaScript imaju I metodu Introduce (), metoda izpisuje na ekran ime,prezime,stack,
    I introduce svojstva.*/
    ?>

    <?php 
    
    class Developer {
        protected string $ime;
        protected string $prezime;
        protected array $stack;
    }

    class BackendDeveloper extends Developer {
        protected string $introduce_message;

        public function __construct() {
            $this->introduce_message = "Backend Developer is working on the server side";
        }
    }

    class FrontendDeveloper extends Developer {
        protected string $introduce_message;

        public function __construct() {
            $this->introduce_message = "Frontend developer is working on the client side";
        }
    }

    class PHP extends BackendDeveloper {
        
        public function __construct() {
            parent::__construct();
            $this->ime = "Mladen";
            $this->prezime = "Konkolj";
            $this->stack = ["php", "mysql"];
        }

        public function Introduce() {
            echo $this->ime;
            echo "<br>";
            echo $this->prezime;
            echo "<br>";
            foreach ($this->stack as $tech) {
                echo $tech;
                echo "<br>";
            }
            echo $this->introduce_message;
            echo "<br>";
        }
    }

    class Javascript extends FrontendDeveloper {
        public function __construct() {
            parent::__construct();
            $this->ime = "Saška";
            $this->prezime = "Despotov";
            $this->stack = ["javascript", "html"];
        }

        public function Introduce() {
            echo $this->ime;
            echo "<br>";
            echo $this->prezime;
            echo "<br>";
            foreach ($this->stack as $tech) {
                echo $tech;
                echo "<br>";
            }
            echo $this->introduce_message;
            echo "<br>";
        }
    }

    $php_dev = new PHP();
    $php_dev->Introduce();

    $js_dev = new Javascript();
    $js_dev->Introduce();

    
    
    
    ?>


    </fieldset>
    <!-- ZADACI END -->
</body>
</html>