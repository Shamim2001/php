<?php
// evenOrOdd number function
function isEven($n) {
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

// factorial number function
function factorial(int $n) {
    $result = 1;
    for ($i = $n; $i >1; $i--) {
        $result *= $i;
    }
    return $result;
}

// food served function 
function serve($foodtype= "Coffie", $numberOfItem= "2 Plates") {
    echo "{$numberOfItem} of {$foodtype} has/have been served";
}

// Unlimited Arguments accept function
function sum(int ...$numbers):int {
    $result = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $result += $numbers[$i];
    }
    return $result;
} 

echo sum(2,4,4,5,6, 7,7);