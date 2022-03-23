<?php 


class Connection {

    private $host;
    private $user;
    private $password;
    private $database;

    public $conn;

    public function __construct() {
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "zadaci";

        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }


}

class Database extends Connection {

    public function GetProducts() {

        $sql = "SELECT * FROM proizvodi";
        $result = $this->conn->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo $row["ime"];
            echo "</div>";
        }

    }

}

$database = new Database;
$database->GetProducts();







?>