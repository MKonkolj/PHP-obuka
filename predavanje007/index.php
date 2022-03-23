<!-- // Inheritance -->

<?php 


class Cars {

    public $year;
    public $boja;
    public $ime;

    public function __construct() {
        $this->ime = "Auto";
    }

    public function GetName() {
        echo $this->ime;
    }

}

class Bmw extends Cars {

    public function __construct() {
        $this->ime = "BMW";
    }

    public function Intro() {
        echo $this->ime;
    }

}

class Audi extends Cars {

    public function __construct() {
        $this->ime = "AUDI";
    }

    public function Intro() {
        echo $this->ime;
    }

}

$bmw = new Bmw();


?>