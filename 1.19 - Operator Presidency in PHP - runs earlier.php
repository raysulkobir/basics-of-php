<?php
// https://www.php.net/manual/en/language.operators.precedence.php

// $a = true || false;
// $b = false or  true;

// $c = true or false;
// $d = false || true;

// var_dump($a, $b);
// echo "check if they are equal: " . ($a === $b) . "\n";
// var_dump($c, $d);


$a = false or true;
$b = false || true;

var_dump($a, $b);
echo "check if they are equal: " . ($a === $b) . "\n";

$c = true and false;
$d = false && true;

var_dump($c, $d);