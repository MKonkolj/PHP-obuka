<!-- Napraviti niz $temperatures, koja ima vrednosti: 25,35,44,66,11,33,12,25,-55.
Napraviti prazan niz $lowest_five. Potrebno je napisati algoritam koja ce izvaditi 5 najmanjih
temperatura sa niza I premestiti u $lowest_five .

Koristiti try catch exception handling :
Ukoliko imamo gresku onda ispisati na ekran
Ako sve je u redu treba ispisati na ekran “ All done! “ I ispisati sa for petljom $lowest_five -->

<?php 

$temperatures = [25,35,44,66,11,33,12,25,-2255];
$lowest_five = [];

function getLowestFiveTemp($array) {
    if ($array) {
        sort($array);
    } else {
        throw new \Exception ("Array doesnt exist");
    }
    
    if(count($array) < 5) {
        throw new \Exception ("Array has less than 5 values");
    } else if ($array[0] < -273) {
        throw new \Exception ("Temperature cannot be less than -273°C");
    }

    return $array;
}

try {
    $lowest_five = getLowestFiveTemp($temperatures);
} catch (\Exception $ex) {
    exit ($ex -> getMessage());
} finally {
    echo "All done!";
}











?>