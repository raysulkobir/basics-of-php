<?php

    // for($i = 0; $i < 100; $i+=7){
    //    echo "This number is {$i}".PHP_EOL;
    // }
    // for($i = 0; $i < 100; $i++){
    //   echo $i % 7 == 0 ? "This number is 7 = {$i}".PHP_EOL : "";
    //   echo $i % 11 == 0 ? "This number is 11 = {$i}".PHP_EOL : "";
    // }
 
    for($i = 0, $j = 0; $i < 100; $i+=7, $j+=11){
      echo "This is a number {$i}".PHP_EOL;
      echo $j <= 100 ? "This is a number 11 = {$j}".PHP_EOL : "";
    }

