<?php
    $n = 10;

    // $result = ($n % 2 == 0) ? "even" : ($n == 10) ? "ten" : "odd";
    $result = ($n % 2 == 0) ? "even" : (($n == 10) ? "ten" : "odd");
    echo $result;