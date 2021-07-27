<?php
//Ternary Oparetor Code
$n = 12;

$result = ($n % 2 == 0) ? "A" : (($n == 11) ? "B" : "c");
echo $result;

if ($n % 2 == 0) {
    echo "{$n} is a even number";
} else {
    echo "{$n}  is a odd number";
}
echo "\n";



// ternary Oparetor 
$evenOdd = ($n % 2 ==0) ? "{$n} is Even Number" : "{$n} is ODD number";

echo $evenOdd; 

echo "\n";

$result = ($n % 2 == 0) ? "A" : (($n == 11) ? "B" : "c");
echo $result;