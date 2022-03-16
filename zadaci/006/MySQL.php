<!-- Napraviti tabelu countries ( id, country_name,population,) u phpmyadmin.

Napraviti funkciju u PHP-u ConnectToDB();
    Ova funkcija povezuje skriptu sa bazom.

Napraviti funkciju FillTable() koja popunjava tabelu countries:
Napraviti asocijativni niz I uneti ime I populaciju 10 razlicitih zemalja. Na primer :
    Serbia => 6000000

Napisati skriptu koja ce uneti zemlje I populaciju u tabelu countries.
Napraviti funkciju ListCountries () :
Ova funkcija izlistava zemlje : npr: Countries:
    -Serbia
    -Mexico -->

<?php 

function ConnectToDB() {

    $conn = mysqli_connect("localhost", "root", "", "obuka");
    
    if(!$conn) {
        die("No connection! ");
    } else {
        // echo "Connected! ";
    }

    return $conn;

}

function FillTable($array) {
    $count = 0;

    foreach($array as $name => $population){

    $insert = " INSERT INTO countries (country_name, population) VALUES ('$name', '$population') ";
    $execute = mysqli_query (ConnectToDB(), $insert);

    if ($execute) {
            $count++;
        }
    }

    echo "Successfully sent ".$count."/".count($array);
    echo "<br>";
}

$countries_and_population = [

    "Papua New Guinea" => 8947024,
    "Serbia" => 8737371,
    "Israel" => 8655535,
    "Switzerland" => 8654622,
    "Togo" => 8278724,
    "Sierra Leone" => 7976983,
    "Hong Kong" => 7496981,
    "Laos" => 7275560,
    "Paraguay" => 7132538,
    "Bulgaria" => 6948445,
    "Libya" => 6871292,
    "Lebanon" => 6825445,
    "Nicaragua" => 6624554,
    "Kyrgyzstan" => 6524195,
    "El Salvador" => 6486205,
    "Turkmenistan" => 6031200,
    "Singapore" => 5850342,
    "Denmark" => 5792202,
    "Finland" => 5540720

];

FillTable($countries_and_population);

function ListCountries() {
    $select = " SELECT country_name, population FROM countries ";
    $execute = mysqli_query(ConnectToDB(), $select);
    $list_number = 0;
    
    while ($row = mysqli_fetch_assoc ($execute)) {
    
        $list_number++;    
        echo $list_number.". ".$row["country_name"];
        echo "<br>";
    
    }
}

ListCountries();

?>