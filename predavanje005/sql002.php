<?php 


$server_name = "localhost";
$user = "root";
$password = "";
$database = "obuka";

$conn = mysqli_connect($server_name, $user, $password, $database);

if(!$conn) {
    die("Dead!");
} else {
    echo "Connected!";
    echo "<br>";
};

// distinct
// $query = " SELECT distinct country FROM countries2 ";
// $run = mysqli_query($conn, $query);

// while($row = mysqli_fetch_assoc($run)) {

//     echo $row["country"];
//     echo "<br>";

// }


// izvalči samo broj gradova i državu
// $query = "SELECT count(city) as numberofcities, country FROM countries2 GROUP BY country";
// $run = mysqli_query($conn, $query);

// while($row = mysqli_fetch_assoc($run)) {

//     echo $row["numberofcities"]." ".$row["country"];
//     echo "<br>";

// }

//regular JOIN
// povezivnanje tabela
// posts.category_id=categories.category_id (id iz postova je isti id iz kategorija)

// $query = "SELECT * FROM posts JOIN categories ON posts.category_id=categories.category_id";
// $run = mysqli_query($conn, $query);

// while($row = mysqli_fetch_assoc($run)) {

//     echo $row["title"]." ------ ".$row["category_name"];
//     echo "<br>";

// }

// LEFT JOIN
// $query = "SELECT * FROM posts LEFT JOIN categories ON posts.category_id=categories.category_id";
// $run = mysqli_query($conn, $query);

// while($row = mysqli_fetch_assoc($run)) {

//     echo $row["title"]." ------> ".$row["category_name"];
//     echo "<br>";

// }

// RIGTH JOIN
$query = "SELECT * FROM posts RIGHT JOIN categories ON posts.category_id=categories.category_id";
$run = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($run)) {

    var_dump($row);

}


?>