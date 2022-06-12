<?php
    $a = 10;
    $b = 20;

    if($a == $b){
        echo "a is equal to b";
    }elseif($a > $b){
        echo "a is greater than b";
    }elseif($a < $b){
        echo "a is less than b";
    }elseif($a >= $b){
        echo "a is greater than or equal to b";
    }elseif($a <= $b){
        echo "a is less than or equal to b";
    }else{
        echo "a is not equal to b";
    }
    echo "\n";

    $age = 18;

    if($age >= 13 && $age <= 19){
        echo "You are a teenager";
    }elseif($age >= 20 && $age <= 30){
        echo "You are a young";
    }elseif($age >= 31 && $age <= 40){
        echo "You are a middle aged";
    }elseif($age >= 41 && $age <= 50){
        echo "You are a old";
    }elseif($age >= 51 && $age <= 60){
        echo "You are a very old";
    }else{
        echo "You are a very very old";
    }
    echo "\n";

    $food = "apple";

    if("apple" == $food){
        echo "I like apple";
    }elseif($food == "banana"){
        echo "I like banana";
    }elseif($food == "orange"){
        echo "I like orange";
    }else{
        echo "I don't like this food";
    }