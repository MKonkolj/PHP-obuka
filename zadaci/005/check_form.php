<?php

$errors = [
    "ime" => "",
    "prezime" => "",
    "avatar" => "",
];

if (isset($_POST["submit"])) {


    if (strlen($_POST["ime"]) < 1) {
        $errors["ime"] = "Niste uneli ime...";
    }

    if (strlen($_POST["prezime"]) < 1) {
        $errors["prezime"] = "Niste uneli prezime...";
    }

    if (isset($_FILES["avatar"])) {
        if ($_FILES["avatar"]["type"] == "image/jpg" || $_FILES["avatar"]["type"] == "image/jpeg" || $_FILES["avatar"]["type"] == "image/png") {
            if ($_FILES["avatar"]["size"] < 2000000) {
                $ekstenzija_slike = ".".ltrim($_FILES["avatar"]["type"], "image/");
                $ime_slike = $_FILES["avatar"]["name"]."__".date("Y-m-d").$ekstenzija_slike;
                move_uploaded_file($_FILES["avatar"]["tmp_name"], "slike/$ime_slike");
            } else {
                $errors["avatar"] = "Prevelika slika. Maksimalna večičina je 2MB.";
            }
        } else {
            $errors["avatar"] = "Neipravan format slike, molim vas postavite .jpeg ili .png fajl...";
        }
    } else {
        $errors["avatar"] = "Niste postavili sliku za avatar...";
    };

    
};

?>