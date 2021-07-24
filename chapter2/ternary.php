<?php
//Ternary Oparetor Code
$n = 13;

if ($n % 2 == 0) {
    echo "{$n} is a even number";
} else {
    echo "{$n}  is a odd number";
}
echo "\n";


// ternary Oparetor 
$evenOdd = ($n % 2 ==0) ? "{$n} is Even Number" : "{$n} is ODD number";

echo $evenOdd;