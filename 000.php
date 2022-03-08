<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
    <title><?php echo "Testiranje" ?></title>
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
</style>
<body>
    <!-- ZADACI -->
    <fieldset><legend>Zadatak 1</legend>
    <?php
    // 1. Podesiti naslov dokumenta. Naslov je “Testiranje”.
    //      ● Pod naslovom dokumenta misli se na <title> tag.
    //      ● Koristiti echo instrukciju. ?>
    

    <?php echo "Look up!" ?>
    

    </fieldset>
    <fieldset><legend>Zadatak 2</legend>
    <?php
    // 2. Ispisati <h1> element na stranici, sa sledećim sadržajem: “Testiranje je počelo.”
    //      ● Koristiti echo instrukciju.?>
    

    <h1><?php echo "Testiranje je počelo." ?></h1>
    
    
    </fieldset>
    <fieldset><legend>Zadatak 3</legend>
    <?php
    // 3. Napiši PHP program koji zamenjuje vrednosti dve promenljive.
    //      ● x = 5
    //      ● y = 10
    ?>

    <?php
        function zamenaVrednosti($x, $y) {
            echo "x: ".$x." // y: ".$y;
            $temp = $y;
            $y = $x;
            $x = $temp;
            echo "<br>zamenjene vrednosti:<br> x: ".$x." // y:".$y;
        };
        zamenaVrednosti(5, 10);
    ?>

    
    </fieldset>
    <fieldset><legend>Zadatak 4</legend>
    <?php
    // 4. Napiši PHP program za izračunavanje sume dve celobrojne vrednosti. Ukoliko su dve vrednosti iste, program vraća njihov trostruki zbir.
    ?>

    <?php
        function sumaITrostrukiZbir($a, $b) {
            return ($a == $b) ? ($a+$b)*3 : $a+$b;
        }
    ?>
    <p><?php echo sumaITrostrukiZbir(3, 3) ?></p>
    
    </fieldset>
    <fieldset><legend>Zadatak 5</legend>
    <?php
    // 5. Napiši PHP program koji ispisuje na stranici true, ukoliko je jedna od dve celobrojne vrednosti broj 30, ili ako im je suma 30 u suprotnom program ispisuje false.
    //      ● ulaz: 30, 0
    //       ○ izlaz: true
    //      ● ulaz: 25, 5
    //        ○ izlaz: true
    //      ● ulaz: 20, 30
    //        ○ izlaz: true
    //      ● ulaz: 20, 25
    //        ○ izlaz: false
    ?>

    <?php
        function proveraZa30($a, $b) {
            return ($a == 30 || $b == 30 || $a + $b == 30) ? "true" : "false";
        }
    ?>
    <p>Da li je broj 30 ili je suma 30? <?php echo proveraZa30(30, 15) ?></p>
    
    
    </fieldset>
    <fieldset><legend>Zadatak 6</legend>
    <?php
    // 6. Napisati PHP program koji će proveriti da li je jedna od dve celobrojne vrednosti manja od 0, a druga veća od 100.
    ?>


    <?php
        function pozitivanBroj($a, $b) {
            if (($a !== abs($a) && $b > 100) || ($b !== abs($b) && $a > 100)) {
                return "Brojevi ispunjavaju uslove";
            } else {
                return "Brojevi NE ispunjavaju uslove";
            }
        }
    ?>
    <p><?php echo pozitivanBroj(103, -102) ?></p>
    
    
    </fieldset>
    <fieldset><legend>Zadatak 7</legend>
    <?php
    // 7. Napisati PHP program koji će proveriti da li je jedna od dve celobrojne vrednosti u opsegu između 100 i 200. (ukljucujuci 100 i 200) Ukoliko jeste program vraca true, a ukoliko nije program vraca false.
    ?>

    <?php
        function inRange($a, $b) {
            if (($a >= 100 && $a <= 200) || ($b >= 100 && $b <=200)) {
                return "true";
            } else {
                return "false";
            }
        }
    ?>
    <p>Da li je broj u opsegu? <?php echo inRange(100, 66) ?></p>
    
    </fieldset>
    <fieldset><legend>Zadatak 8</legend>
    <?php
    // 8. Napisati PHP program koji određuje najveci broj između tri celobrojne vrednosti i ispisati ga na stranicu.
    //      ● Nije dozvoljeno korišćenje bilo koje ugrađjene funkcije za određivanje najvećeg broja.
    ?>

    <?php
        function biggestNum($a, $b, $c) {
            $numbers = [$a, $b, $c];
            $biggestNum = 0;
            foreach($numbers as $number) {
                ($number > $biggestNum) ? $biggestNum = $number : 0;
            }
            return $biggestNum;
        }
    ?>
    <p>Najveći broj je: <?php echo biggestNum(33, 155, 88) ?></p>
    
    </fieldset>
    <fieldset><legend>Zadatak 9</legend>
    <?php
    // 9. Napisati PHP program koji će proveriti koja od dve celobrojne vrednosti je bliža broju 100 i ispisati je. Ukoliko su brojevi jednaki, ispisati 0.
    ?>

    <?php
        function closestTo100($a, $b) {
            if(abs($a) == abs($b)) {
                return "Razmak je: 0";
            } elseif (abs($a-100) < abs($b-100)) {
                return $a." je bliži 100!";
            } else {
                return $b." je bliži 100!";
            }
        }
    ?>
    <p><?php echo closestTo100(102, 88) ?></p>
    
    </fieldset>
    <fieldset><legend>Zadatak 10</legend>
    <?php
    // 10. Napisati PHP program koji će ispisati na strinici true ukoliko su obe celobrojne vrednosti u opsegu izmedju 40 i 50 (ukljucujuci 40 i 50), ili su obe vrednosti u opsegu između 50 i 60 (ukljucujuci 50 i 60), u suprotnom false.
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 11</legend>
    <?php
    // 
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 12</legend>
    <?php
    // 
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 13</legend>
    <?php
    // 
    ?>

    
    
    </fieldset>
    <!-- ZADACI END -->
</body>
</html>