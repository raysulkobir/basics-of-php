<?php
    for($i = 1; $i < 10; $i++){
       if($i == 2){
           echo "This number is {$i}".PHP_EOL;
           break;
       }
    }

    for($i = 1; $i < 10; $i++){
       if($i == 2){
              continue;
       }else{
              echo "This number is use continue {$i}".PHP_EOL;
       }
    }