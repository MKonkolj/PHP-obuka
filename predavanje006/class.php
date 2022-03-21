<?php 

class Person {

    public $ime;
    public $visina;

    public function SetName($ime) {
        $this->ime = $ime;
    }

    public function GetName() {
        echo "Hello, im ".$this->ime;
    }

}

$person = new Person();
$person->SetName("Dejan");
$person->GetName();

$person = new Person();
$person->SetName("Marko");
$person->GetName();

?>