<?php

$ime_error = "";
$prezime_error = "";

if (isset($_POST["ime"]) && isset($_POST["prezime"])) {
    
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];

    $name = $_FILES["slika"]["name"];
    $size = $_FILES["slika"]["size"];
    $path = $_FILES["slika"]["tmp_name"];

    move_uploaded_file($path, "slike/".$name);

    echo "name: $name <br>";
    echo "size: $size <br>";
    echo "path: $path <br>";

    if (strlen($ime) < 5) {
        $ime_error = "Min 5 char za ime...";
    }

    if (strlen($prezime) < 5) {
        $prezime_error = "Min 5 char za pretime...";
    }

} else {
    echo "0";
}

?>