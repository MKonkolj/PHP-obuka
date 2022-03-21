<?php 

$host = "localhost";
$user = "root";
$pass = "";
$database = "zadaci";

$conn = mysqli_connect($host, $user, $pass, $database);

$sql = "SELECT * FROM proizvodi";
$run = mysqli_query($conn, $sql);

while ($item = mysqli_fetch_assoc($run)) {
    echo "- ".$item["ime"];
    echo "<br>";
}

?>