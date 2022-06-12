<?php
    $condition1 = true;
    $condition2 = false;
    $condition3 = true;

    if($condition1 && $condition2){
        echo "This is true";
    }else{
        echo "This is false";
    }
    echo "\n";

    if($condition1){
        if($condition2){
            echo "This is true";
        }else{
            echo "This is false";
        }
    }elseif($condition3){
        if($condition2){
            echo "This is true";
        }else{
            echo "This is false";
        }
    }else{
        echo "This is false";
    }