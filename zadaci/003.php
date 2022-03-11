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
    <h3>Taskovi: funkcije i forme</h3>
    <!-- ZADACI -->
    <fieldset><legend>Funkcije</legend>
    <?php
    // Napisati funkciju FillArray() koja prima 3 parametra: $array,$m,$n. $array je prazan niz I definisan je globalno , $m I $n su pozitivni brojevi I definisani su globalno.
    // U FillArray() funkciji treba proveriti da li je $n veca od $m ukoliko nije onda potrebno je povecati vrednost $n varijablu tako da bude veca dva puta od $m.
    // Nakon toga treba popuniti $array sa vrednostima od $m do $n sa for petljom.
    // Napisati funkciju SortAsc(), ova funkcija treba da sortira prethodno popunjen array uzlazno.
    // Napisati funkciju SortDesc(), funkcija sortira isti array ali silazno.
    ?>

    <?php 
        $array = [];
        $m = 6; // pozitivan broj
        $n = 4; // pozitivan broj
        var_dump($array);
    
        function FillArray(&$array, &$m, &$n) {

            ($n < $m) ? $n = $m*2 : false;

            for ($i=$m; $i <= $n; $i++) { 
                $array[] = $i;
            }
        };
        FillArray($array, $m, $n);
        var_dump($array);

        function SortAsc() {
            global $array;
            asort($array);
        };
        SortAsc();
        var_dump($array);

        function SortDesc() {
            global $array;
            arsort($array);
        };
        SortDesc();
        var_dump($array);
    ?>


    </fieldset>
    <!-- ZADACI END -->
</body>
</html>