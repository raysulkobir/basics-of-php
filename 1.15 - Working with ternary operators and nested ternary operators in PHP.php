<?php
    $a = 10;
    $b = 10;
    $c = 30;

    if($a == $b){
        echo "a is equal to b";
    }elseif($a == $c){
        echo "a is equal to c";
    }else{
        echo "a is not equal to b or c";
    }
    echo "\n";

    $result = ($a == $b) ? "a is equal to b" : "a is not equal to b";
    echo $result;
    echo "\n";

    $result2 = ($a == $b) ? ($c % 2 == 0) ? "a is even" : "a is odd" : "a is not equal to c";
    echo $result2;
    echo "\n";