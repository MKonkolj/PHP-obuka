<?php 

class One {
    public $ime;

    public function __construct() {
        $this->ime = "One";
    }
}

class Two extends One {
    public $godina;

    public function __construct() {
        parent::__construct();
        $this->godina = "2022";
    }

    public function GetName() {
        echo $this->ime;
    }
}

$test = new Two();
$test->GetName();

?>