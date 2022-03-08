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
    }
    fieldset {
        margin: 1rem 0;
    }
    legend {
        color: grey;
        font-size: 0.875rem;
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

    
    
    </fieldset>
    <fieldset><legend>Zadatak 6</legend>
    <?php
    // 6. Napisati PHP program koji će proveriti da li je jedna od dve celobrojne vrednosti manja od 0, a druga veća od 100.
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 7</legend>
    <?php
    // 7. Napisati PHP program koji će proveriti da li je jedna od dve celobrojne vrednosti u opsegu između 100 i 200. (ukljucujuci 100 i 200) Ukoliko jeste program vraca true, a ukoliko nije program vraca false.
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 8</legend>
    <?php
    // 8. Napisati PHP program koji određuje najveci broj između tri celobrojne vrednosti i ispisati ga na stranicu.
    //      ● Nije dozvoljeno korišćenje bilo koje ugrađjene funkcije za određivanje najvećeg broja.
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 9</legend>
    <?php
    // 9. Napisati PHP program koji će proveriti koja od dve celobrojne vrednosti je bliža broju 100 i ispisati je. Ukoliko su brojevi jednaki, ispisati 0.
    ?>

    
    
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