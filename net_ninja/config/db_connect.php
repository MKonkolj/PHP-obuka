<?php 

//connect to database
$conn = mysqli_connect("localhost", "admin", "test1234", "phpizzas");

//check connection
if(!$conn){
    echo "Connection error: ".mysqli_connect_error();
}

?>