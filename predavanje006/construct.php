<?php 

class Person {

    public $ime;

    function __construct(){
        // Desi se svaki put kada se kreira nova klasa
        $this->ime = "Marko";

    }

    public function GetName(){
        echo $this->ime;
    }

    function __destruct(){
        // nešto što mora da se desi na kraju
        $this->ime = "Destructor";
    }
}


$marko = new Person();
$marko->GetName();

?>