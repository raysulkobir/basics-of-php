<?php
    // 3*2*1
$n = 3;
for($i = $n, $factorial = 1; $i > 1; $i--){
  $factorial *= $i;
  echo "Factorial of {$i} is {$factorial}".PHP_EOL;
}

echo "The factorial of {$n} is {$factorial}";