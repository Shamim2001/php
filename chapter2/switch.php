<?php

$n = 13;
$r = $n % 2;

switch ($r) {
    case 0:
        echo "{$n} is Even Number \n";
        break;
    default:
        echo "{$n} is Odd Number \n";
}

$color = 'red';

switch ($color) {
    case 'red':
    case 'green':
        echo ucwords($color)." is my favorite color";
        break;
    case 'blue':
        echo "Blue is my favorite color";
        break;
    default:
        echo "it's ok";
} 

echo "\n";

// switch statement use leap year check
$year = 2022;
$result = $year % 400 ==0 || $year % 100 ==0 || $year % 4 ==0;

switch ($result) {
    case 1:
        echo "{$year} is a leap year";
        break;
    
    case 0:
        echo "{$year} is not a leap year";
        break;

    default:
    echo "{$year} is not  a leap year";
}

