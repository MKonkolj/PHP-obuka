<?php 
require("connect_db.php");

if(isset($_POST["submit"])) {
    try {

        CreateNewProduct();
    
    } catch (\Exception $ex) {
    
        exit ($ex -> getMessage());
    
    } finally {

        header("Location: index.php");
    
    }
}

function CreateNewProduct(){

    if(strlen($_POST["ime"]) < 5) {
        throw new \Exception ("Ime proizvoda mora biti duže od 5 karaktera...");
    }
    if($_POST["cena"] < 100) {
        throw new \Exception ("Cena mora biti veća od 100 rsd...");
    }

    $ime = $_POST["ime"];
    $cena = $_POST["cena"];
    $kategorija = $_POST["kategorija"];

    $db = connect();
    $sql = " INSERT INTO proizvodi(ime, cena) VALUES ('$ime', '$cena') ";
    $run = mysqli_query($db, $sql);

    // if($run) {
    //     $sql2 = " INSERT INTO categories(category_name) VALUES ('$kategorija') ";
    //     $run2 = mysqli_query($db, $sql2);
    // }

}

?>