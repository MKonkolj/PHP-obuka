<?php

    $datum = date(mktime(0, 0, 0, 3, 4, 2055)); // '2687731200'
    var_dump($datum);
    $datum = date("l", mktime(0, 0, 0, 3, 3, 2055)); // 'Thursday'
    var_dump($datum);
    $datum = date("F", mktime(0, 0, 0, 2, 4, 2055)); // 'March'
    var_dump($datum);
    $datum = date("j", mktime(0, 0, 0, 3, 4, 2055)); // '4'
    var_dump($datum);


    $datum = date("d\.m\.", mktime(0, 0, 0, 3, 4, 2055)); // '4.5.'
    var_dump($datum);





?>