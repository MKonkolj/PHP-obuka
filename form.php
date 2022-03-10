<!-- <form method="GET" action="<?php $_SERVER["PHP_SELF"]; ?>">

<input type="text" name="Ime">
<input type="text" name="Prezime">
<input type="submit">


</form> -->

<form method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">

<input type="text" name="Ime">
<input type="text" name="Prezime">
<input type="submit">


</form>

<?php 

// echo $ime = $_POST["Ime"];
// ovo je array koji gde postoji key sa value

if(isset($_POST["Ime"])) {

    echo $ime = $_POST["Ime"];
    echo $ime = $_POST["Prezime"];
}

var_dump($_POST);



?>