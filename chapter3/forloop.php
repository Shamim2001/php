<?php
/*
// multiple steping for loop
echo "Multiple steping for loop";
echo PHP_EOL;

for($i = 10, $j=1; $i > 0; $i-=1, $j++) {
    echo $i.":".$j;
    echo PHP_EOL;
} */

// number factorial program 

$n = 10;
for($i = $n, $factorial = 1; $i > 1; $i--) {
    $factorial *= $i;
}
printf("The factorial of %d is %d", $n, $factorial);

echo PHP_EOL;

// fibonency Seriej print 
$veryold = 0;
$old = 1;
$new = 1;

for($i = 0; $i < 10; $i++) {
    echo $veryold. " ";
    $veryold = $old;
    $old = $new;
    $new = $old + $veryold;
    
}