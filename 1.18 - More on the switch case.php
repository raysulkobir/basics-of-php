<?php
    $a = 10;
    $b = $a % 2;

    switch($b){
        case 0:
            switch($a){
                case 10:
                    echo "a is equal to 10";
                    break;
                case 20:
                    echo "a is equal to 20";
                    break;
                default:
                    echo "a is not equal to 10 or 20";
                    break;
            }
        case 1:
            echo "Odd";
            break;
    }