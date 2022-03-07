<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Mladen Konkolj">
    <title>Taskovi</title>
</head>
<body>
    <!-- ZADACI -->
    <fieldset><legend>Task 1</legend>
    <?php
    // Korišćenjem programskog jezika PHP prikazati osnovne aritmetičke operacije sabiranja, oduzimanja, množenja, deljenja i ostatka pri deljenju.
    
    function listaOperacija($a, $b) {

        echo $a + $b;
        echo "<br>";
        echo $a - $b;
        echo "<br>";
        echo $a * $b;
        echo "<br>";
        echo $a / $b;
        echo "<br>";
        echo $a % $b;

    };
    listaOperacija(5, 7)
    
    ?>
    </fieldset>
    <fieldset><legend>Task 2</legend>
    <?php
    // Niz
    //  - Kreirati niz od 4 automobila (ime)
    //  - Kreirati asociativni niz od 4 automobila (ime,cena)
    //  - Kreirati multidimenzionalni niz od 4 automobila (ime,cena)
    //  - Sortirati indexed niz , sortirati asocijativni niz prema vrednosti automobila,sortirati multidimenzionalni niz prema ceni (uzlazni).
    //  - Ispisati vrednosti sa for I foreach .
    //  - Ispisati vrednosti staticki bez for I forearch.
    //  - Ispisati koliko elementa ima indexed ,asocijativni,multidimenzionalni niz.
    
    function kreiranjeNizova() {

        $autiNiz = ["Yugo", "Lada", "Trabant", "Buba"];
        $autiAsocNiz = ["Ford" => 18000, "Mazda" => 25000, "BMW" => 35000, "Renault" => 21000];
        $autoMultiNiz = array(
            array("Maserati", 96000),
            array("Ferarri", 410000),
            array("Aston Martin", 176000),
            array("Lamborghini", 275000),
        );

        $sortedNiz = sort($autiNiz);
        $sortedAsocNiz = asort($autiAsocNiz);
        $sortedAsocNiz = arsort($autoMultiNiz);

        // FOR loop
        for($i = 0; $i < sizeof($autiNiz); $i++) {
            echo $autiNiz[$i]."<br>";
        }
        
        echo "<br>";
        // FOREACH loop
        foreach ($autiAsocNiz as $ime => $cena) {
            echo "Cena za $ime je $cena EUR<br>";
        }
        
        echo "<br>";
        // STATIC
        echo $autoMultiNiz[0][0]." ima cenu od: ".$autoMultiNiz[0][1]."<br>";
        echo $autoMultiNiz[1][0]." ima cenu od: ".$autoMultiNiz[1][1]."<br>";
        echo $autoMultiNiz[2][0]." ima cenu od: ".$autoMultiNiz[2][1]."<br>";
        echo $autoMultiNiz[3][0]." ima cenu od: ".$autoMultiNiz[3][1]."<br>";

        //SIZEOF
        echo "<br><strong>Dužine nizova:</strong>";
        echo "<br>Indeksirani niz je dug: ".sizeof($autiNiz);
        echo "<br>Asocijativni niz je dug: ".sizeof($autiAsocNiz);
        echo "<br>Multidimenzionlni niz je dug: ".sizeof($autoMultiNiz);

    };
    kreiranjeNizova();
    
    ?>
    </fieldset>
    <fieldset><legend>Task 3</legend>
    <?php
    // Kreirati multidimenzionalni niz od 4 automobila. ( ime auta, cena ).
    //  - Sa for petljom povecati cenu auta na 20%
    //  - Sortirati niz prema ceni auta (uzlazni)
    
    function carCostIncrease() {

        $carsForSale = array (
            array("Porsche 911", 100000),
            array("Ford GT", 150000),
            array("Mazda RX8", 6000),
            array("BMW M3", 55000),
        );

        for($i = 0; $i < sizeof($carsForSale); $i++) {
            $carsForSale[$i][1] *= 1.2;
            echo $carsForSale[$i][0]." got more expensive, now its worth $".$carsForSale[$i][1]."<br>";
        };

        $cene = array_column($carsForSale, 1);

        array_multisort($cene, SORT_ASC, $carsForSale);
        // var_dump($carsForSale);

        echo "<br><strong>Sortirane cene:</strong><br>";
        for($i = 0; $i < sizeof($carsForSale); $i++) {
            echo $carsForSale[$i][1]."<br>";
        };

    };
    carCostIncrease();

    ?>
    </fieldset>
    <fieldset><legend>Task 4</legend>
    <?php
    // Kreirati prazan multidimenzionalni niz i popuniti sa podacima dinamicki sa foreach petljom.
    // Popuniti niz sa sledecim podacima:
    //  Dogadjaji = >
    //  [
    //      2055-03-03 = > [
    //          ‘Bozic’ => [
    //              ‘prioritet’ =>3
    //          ]
    //          ‘Uskrs’ => [
    //              ‘prioritet’ =>3
    //          ]
    //          ‘trening’ => [
    //              ‘prioritet’=1
    //          ]
    //          ‘ispit’ => [
    //              ‘prioritet’=3
    //          ]
    //      ]
    //  ]

    // Napraviti sledeci algoritam:
    // Ukoliko imamo za jedan datum vise dogadjaja izabrati dogadjaj sa najvecim prioritetom a sve ostalo za taj dan obrisati, ukoliko imaju isti prioritet onda je potrebno izabrati oba. Znaci u ovom primeru bozic I trening imaju konflikt na datumu 2055-03-03 ,ali posto bozic ima veci prioritet trening treba da obrisemo. Ispit I uskrs imaju konflikt ali imaju isti prioritet tako da ne brisemo nista.
    // Kada se odradi algoritam potrebno je foreach petljom prikazati sve dogadjaje :
    // - Datum :
    // - Dogadjaj
    
        function kalendarPrioriteta() {

            $kalendar = [];
            foreach ($kalendar as $datum => $događaj) {
                foreach ($događaj as $key => $value) {
                    # code...
                }
            }

        };
        kalendarPrioriteta();

    
    ?>
    </fieldset>


<!-- ZADACI END -->
</body>
</html>