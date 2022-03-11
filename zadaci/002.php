<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
    <title><?php echo "Zadaci 2" ?></title>
</head>
<style>
    * {
        font-family: 'Inconsolata', monospace;
    }
    body {
        width: 80%;
        margin: 0 auto;
        padding: 2rem 0;
        background: linear-gradient(to right, #355c7d, #6c5b7b, #c06c84);
    }
    fieldset {
        margin: 1rem 0;
        background: white;
        border: 2px solid #C06C84;
        border-top: 2.5rem solid white;
    }
    legend {
        color: #355C7D;
        font-size: 0.875rem;
        font-weight: 700;
    }
    h3 {
        color: white;
    }
</style>
<body>
    <h3>Taskovi 2</h3>
    <!-- ZADACI -->
    <fieldset><legend>Zadatak 1</legend>
    <?php
    // 1.Definisan je sledeći niz:
    //      $arr = array(2,5,1,7,4,3,8);
    // Potrebno je napraviti aplikaciju koja će sortirati ovaj niz tako da vrednosti budu poređane od manje ka većoj. (koristiti ugradjenu funkciju
    ?>

    <?php
        $arr = array(2,5,1,7,4,3,8);
        sort($arr);
        var_dump($arr);
    ?>


    </fieldset>
    <fieldset><legend>Zadatak 2</legend>
    <?php
    // Definisan je sledeći niz:
    //     $arr = array(2,5,1,7,4,3,8);
    //      - Ispisati na ekran svaki element bez for ili foreach petlje.
    //      - Ispisati na ekran svaki element sa for I foreach petljom.
    ?>
    
    <p>Bez for / foreach:<br>
    <?php    

        function printOut($item) {
            echo "<span>".$item.", </sšan>";
        };
        array_map("printOut", $arr)

    ?></p>

    <p>Sa for petljom:<br>
    <?php    
        
        for($i = 0; $i < count($arr); $i++) {
            echo "<span>".$arr[$i].", </span>";
        }

    ?></p>

    <p>Sa foreach petljom:<br>
    <?php    
        
        foreach($arr as $item) {
            echo "<span>".$item.", </span>";
        }

    ?></p>
    
    
    </fieldset>
    <fieldset><legend>Zadatak 3</legend>
    <?php
    // Definisan je sledeći niz:
    //  $arr = array(“programer”=>3,”marketing”=>4,”devops”=>6);
    //      - Ispisati na ekran kljuc I vrednost bez for ili foreach petlje.
    //      - Ispisati na ekran kljuc I vrednost sa for I foreach petljom
    ?>

    <p>Bez for/foreach petlje:<br><?php
    $asoc_arr = ["programer" => 3, "marketing" => 4, "devops" => 6];
    $keys = array_keys($asoc_arr);

    echo "<span>".$keys[0]." / ".$asoc_arr["programer"].", </span>";
    echo "<span>".$keys[1]." / ".$asoc_arr["marketing"].", </span>";
    echo "<span>".$keys[2]." / ".$asoc_arr["devops"].", </span>";

    ?></p>

    <p>Sa for petljom:<br><?php
    
        $keys = array_keys($asoc_arr);
        for($i = 0; $i < count($keys); $i++) {
            echo "<span>".$keys[$i]." / ".$asoc_arr[$keys[$i]].", </span>";
        }

    ?></p>

    <p>Sa foreach:<br><?php
    
        foreach($asoc_arr as $key => $value) {
            echo "<span>".$key." / ".$value.", </span>";
        }

    ?></p>
    
    </fieldset>
    <fieldset><legend>Zadatak 4</legend>
    <?php
    // Dat je niz:
    //  $arr = array(0,1,2,3,4,5,6,7,8);
    //  Potrebno je napraviti kod koji će prikazati svakog člana niza pomnoženog sa prethodnim članom niza.
    //   0
    //   0
    //   2
    //   6
    //   12
    //   20
    //   30
    //   42
    //   56
    // Koristite for ili foreach ... proverite da li je $i < 0 ( ako jeste onda nemoze da
    // mnozimo sa prethodnim clanom niza
    ?>

    <p>Pomnožen array:</p>
    <ul>
    <?php
        $newArray = array(0,1,2,3,4,5,6,7,8);
        function incrementalMultiply($array) {
            for($i = 1; $i < count($array); $i++) {
                echo "<li>";
                echo $array[$i-1]*$array[$i];
                echo " (".$array[$i].")";
                echo "</li>";
            };
        };
        incrementalMultiply($newArray);
    ?>
    </ul>
    </fieldset>
    <!-- ZADACI END -->
</body>
</html>