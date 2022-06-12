<?php
    $year = 2012;
 
    if(true && true){
        echo "This is true";
    }else{
        echo "This is false";
    }

    echo "\n";
    if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
        echo "This is a leap year";
    }else{
        echo "This is not a leap year";
    }
    echo "\n";

    if(10 !== 11){
        echo "This is true";
    }else{
        echo "This is false";
    }

?>