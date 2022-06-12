<?php
$a = 100;
$b = 10;
$c = 30;

switch($a){
    case ($a == $b):
        echo "a is equal to b";
        break;
    case $c:
        echo "a is equal to c";
        break;
    default:
        echo "a is not equal to b or c";
}