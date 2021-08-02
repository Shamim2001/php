<?php


// fibonacci series print by reccersive function 
/*
function fibonacci($old, $new, $end) {

    static $start;
    $start = $start ?? 0;


    if ($start > $end) {
        return;
    }
    $start++;

    echo $old. " ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);
}

fibonacci(0, 1, 15);
*/

// factorial function using  recursive function 

function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial(6);