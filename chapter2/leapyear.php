<?php

$year = 2021;

// if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
//     echo "{$year}  is a leap year";
// } else if ($year % 4 == 0 && $year % 100 == 0) {
//     echo "{$year}  is a leap year";
// } else if ($year % 4 == 0) {
//     echo "{$year}  is a leap year";
// } else {
//     echo "{$year}  is not a leap year";
// }

// nested condition check leap year
if($year % 4 == 0){
    if($year % 100 != 0) {
        if ($year % 4 == 0) {
            echo "{$year} is a leap year";
        } else {
                echo "{$year}  is not a leap year";
            }
    } else {
        echo "{$year}  is not a leap year";
    }
} else {
    echo "{$year}  is not a leap year";
}

echo "\n";


// smart code practice
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year}  is a leap year";
} else {
    echo "{$year}  is not a leap year";
}
