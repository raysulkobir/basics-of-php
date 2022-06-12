<?php
    $number = 10;
    printf("This is a %s number %d", $number, 1000);
    echo "\n";

    $fName = "Md.Raysul";
    $lName = "Kobir";

    printf("My name is %s %s", $fName, $lName);
    echo "\n";

    printf('My name is %1$s %1$s', $fName, ++$lName);
    echo "\n";

    $n = 10.36522;
    echo (int) $n;
    echo "\n";
    printf("%d", $n);
    echo "\n";
    printf("%05d", $n);
    echo "\n";

    printf("%.1f", $n);
    echo "\n";


    printf("%5.2f", $n);
   



?>