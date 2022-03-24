<?php 

trait message {
    public function message(){
        echo "Cao";
    }
}

class Product {
    use message;
}

$product = new Product();
$product->message();


?>