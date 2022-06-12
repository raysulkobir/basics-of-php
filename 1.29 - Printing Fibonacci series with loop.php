<?php
    $veryOld = 0;
    $old = 1;
    $new = 1;

    for($i = 0; $i <= 10; $i++){
        echo "This number is {$veryOld}".PHP_EOL;
        $veryOld = $old;
        $old = $new;
        $new = $veryOld + $old;
    }

    /*
        varyOld = 0;
        old = 1;
        new = 1;

        varyOld = 1;
        old = 1;
        new = 2;

        varyOld = 1;
        old = 2;
        new = 3;

        varyOld = 2;
        old = 3;
        new = 5;

        varyOld = 3;
        old = 5;
        new = 8;

        varyOld = 4;
        old = 8;
        new = 13;