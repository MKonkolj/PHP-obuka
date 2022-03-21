<?php 

class Car {

    public $year;
    public $brand;

    private function set_brand(){
        $this->brand = "BMW";
    }



}

$car1 = new Car();
// $car1->set_brand();



?>