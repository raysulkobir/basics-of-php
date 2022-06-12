<?php
define("PI", 3.14567);
echo "The value of PI is " . PI;
echo "<br>";

echo constant("PI");

$task = "Read";
echo "Today I am going to $task";
echo "<br>";

$task = "Green";
echo "Today I am going to $task";
echo "<br>";

$task = "Yellow";
echo "Today I am going to $task";
echo "<br>";


$constant = "constant";
echo "Today I am going to {$constant('PI')}";

// define("PI", 3.14);