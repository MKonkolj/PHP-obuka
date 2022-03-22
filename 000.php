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
    h3 {
        color: white;
    }
</style>
<body>
    <h3>Zadaci sa testiranja</h3>
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

    <?php 
    
    function between40and60($a, $b) {
        if($a >= 40 && $b >= 40) {
            if($a <= 50 && $b <= 50) {
                echo "Oba broja su u opsegu 40 do 50";
            } elseif ($a >= 50 && $b >= 50 && $a <= 60 && $b <= 60) {
                echo "Oba broja su u opsegu 51 do 60";
            } else {
                echo "Brojevi nisu u istom opsegu";
            }
        } else {
            echo "Brojevi nisu u opsegu";
        }
     }
    
    ?>
    <p><?php between40and60(44, 55) ?></p>
    
    </fieldset>
    <fieldset><legend>Zadatak 11</legend>
    <?php
    // Napisati PHP program koji će proveriti da li dva nenegativna broja imaju istu poslednju cifru. Ukoliko imaju, ispisati true na strinici, u suptornom false.
    ?>

    <?php 
    
    function poslednjaCifra($a, $b) {
        if(abs($a) !== $a || abs($b) !== $b) {
            echo "Oba uneta broja moraju biti pozitivni";
        } else {
            if(substr($a, -1) == substr($b, -1)) {
                echo "true";
            } else {
                echo "false";
            }
        }
    }
        
    ?>
    <p><?php poslednjaCifra(25, 24445) ?></p>
    
    </fieldset>
    <fieldset><legend>Zadatak 12</legend>
    <?php
    // Definisati jednu promenljivu koja je tipa string. Napisati PHP program koji će:
    // ● Pretvoriti sve karaktere stringa u velika slova.
    // ● Pretvoriti sve karaktere stringa u mala slova.
    // ● Pretvoriti prvi karakter stringa u veliko slovo.
    // ● Pretvoriti prvi karakter svake reči u veliko slovo.
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 13</legend>
    <?php
    // Napisati PHP program koji će proveriti da li string1 sadrži u sebi string2. Ukoliko sadrži ispisati:
    // “Reč je prisutna.”, u suprotnom “Reč nije prisutna.”
    // ● string1 - PHP je najbolji programski jezik i volim da pišem PHP programe.
    // ● string2 - PHP
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 14</legend>
    <?php
    // Napisati PHP program koji briše sve 0 sa početka datog stringa.
    // ● string - 000547023.24
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 15</legend>
    <?php
    // Napisati PHP program koji će obrisati deo stringa.
    // ● string: PHP je najbolji programsi jezik i volim da pišem PHP programe.
    // ● string koji se brise: PHP
    // ● ispisati na stranici tako izmenjeni string
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 16</legend>
    <?php
    // Definisati numericki niz. (statički) Vrednosti niza su brojevi od 1 do 5. Ispisati poslednji element niza.
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 17</legend>
    <?php
    // Definisati asocijativni niz. (statički) Niz sadrži podatke o vama. Ime, prezime, grad u kome živite na sledeći način.
    //  ● Primer:
    //      ○ indeks ime, vrednost Petar
    //      ○ indeks prezime, vrednost Petrovic
    //      ○ indeks grad, vrednost Beograd
    // Ispisati podatke niza na sledeći naćin:
    //      Ime: Petar
    //      Prezime: Petrovic
    //      Grad: Beograd
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 18</legend>
    <?php
    // Za predefinisane brojeve n i a napisati kod koji sve brojeve od 1 do n koji su deljivi sa a smešta u numerički niz i prikazuje ga na stranici.
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 19</legend>
    <?php
    // Kreirati numerički niz gde je svaki element novi asocijativni niz sa podacima o zaposlenima. Podaci u nizu su (0) ime i prezime, (1) mesto zaposlenja, (2) lokacija gde živi i (3) zarada. Niz treba da ima bar pet zaposlenih.
    // a. Izlistati i prikazati sve zaposlene koji žive u Beogradu.
    // b. Ispisati sve zaposlene koji imaju platu veću od 15000.
    // c. Pronaći radnika sa najvećom zaradom i ispisati podatke o njemu.
    // d. Pronaći srednju zaradu svih radnika.
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 20</legend>
    <?php
    // Napisati PHP program koji će prikazati elemente niza u neodredjenoj listi. Dati niz sadrži 3 elementa koji su stringovi: zelena, crvena i bela
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 21</legend>
    <?php
    // Napraviti niz koji će sadržati celobrojne vrednosti od 1 do 5. Obrisati bilo koji element niza tako da indeksi niza budu normalizovani.
    // Primer:
    // ● array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
    // ● Kada se obriše element sa indeksom [3] rezultat je:
    // ● array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 22</legend>
    <?php
    // Napisati PHP program koji će na osnovu dva niza napraviti treći niz u kojem će indeksi biti vrednosti iz prvog niza, a vrednosti će biti vrednosti iz drugog niza.
    // ● Prvi niz: “field1” => “first”, “field2” => “second”, “field3” => “third”
    // ● Drugi niz: “fiedl1value” => “dinosaur”, “field2value => “pig”, “field3value” => “platypus”
    // ● Izlaz treba biti: “first” => “dinosaur”, “second” => “pig”, “third” => “platypus”
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 23</legend>
    <?php
    // Napisati PHP program koji će kreirati niz čije će vrednosti biti brojevi iz datog stringa.
    // ● String: “1 - 2 - 3 - 4 - 5”
    // ● Kreirati niz u kojem će biti samo parni brojevi i ispisati ga na stranicu.
    // ● Kreirati niz u kojem će biti samo neparni brojevi i ispisati ga na stranicu.
    ?>

    
    
    </fieldset>
    <fieldset><legend>Zadatak 24</legend>
    <?php
    // 
    ?>

    
    
    </fieldset>
    <!-- ZADACI END -->
</body>
</html>