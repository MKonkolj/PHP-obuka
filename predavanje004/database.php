<?php 


$server_name = "localhost";
$user = "root";
$password = "";
$database = "predavanje";

$conn = mysqli_connect($server_name, $user, $password, $database);

if(!$conn) {
    die("Dead!");
} else {
    echo "Connected!";
};


// slanje u bazu
// $insert = " INSERT INTO primer (product_name, product_price) VALUES ('Nike AirMax', '16000'), ('Fila', '17000') ";


// $execute = mysqli_query($conn, $insert);
// // var_dump($execute);


// if ($execute) {
//     echo "Done";
// } else {
//     echo "not Done!";
// }


// //fetch 

// $select = " SELECT product_name, product_price FROM primer ";
// $execute2 = mysqli_query($conn, $select);

// while ($row = mysqli_fetch_assoc ($execute2)) {

// echo $row["product_name"].": ".$row["product_price"]." rsd";
// echo "<br>";

// }

// sve patike koje su skuplje od 2000rsd

// $select = " SELECT product_name, product_price FROM primer WHERE product_price > 16500 ";
// $run = mysqli_query ($conn, $select);

// while ($row = mysqli_fetch_assoc ($run)) {
//     echo $row["product_name"]. ": ".$row["product_price"];
// }

//sortiranje po ceni
// $select = " SELECT product_name, product_price FROM primer ORDER BY product_price DESC ";
// $run = mysqli_query ($conn, $select);

// while ($row = mysqli_fetch_assoc ($run)) {
//     echo $row["product_name"]. ": ".$row["product_price"];
// }


//count sql
// $select = " SELECT count(product_id) as sumOfProducts FROM primer ";

// update
// $update = " UPDATE primer SET product_price = 6000 WHERE product_id=1 ";
// $execute = mysqli_query($conn, $update);


// delete
$delete = " DELETE FROM primer WHERE product_price > 6000 ";
$execute = mysqli_query($conn, $delete);















?>