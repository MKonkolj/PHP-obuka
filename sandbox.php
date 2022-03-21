<?php 

function connect() {
    $host = '127.0.0.1';
    // $port = 3000;
    $dbname = 'zadaci';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $db = new mysqli($host, $user, $pass, $dbname);
        $db->set_charset($charset);
        $db->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
    } catch (\mysqli_sql_exception $e) {
         throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
    }
    unset($host, $dbname, $user, $pass, $charset, $port);

    return $db;
}


?>
<?php 




    $db = connect();
    $sql = "  ";
    $run = mysqli_query($db, $sql);
    
    while($list = mysqli_fetch_assoc($run)) {
        echo $list["country"]." ".$list["num_cities"];
        echo "<br>";
    };







?>