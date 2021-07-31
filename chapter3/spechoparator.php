<?php
//sprechship Oparetor

$x = 7;
$y = 5;

function greaterOrsmaller($x , $y) {
    if ($x >$y) {
        return 1;
    } else if($x == $y) {
        return 0;
    } else {
        return -1;
    }
}

if (greaterOrsmaller($x, $y) == 1) {
    echo "{$x} is greater then {$y}";
} else if(greaterOrsmaller($x, $y) == 0) {
    echo "{$x} is equal to {$y}";
} else if(greaterOrsmaller($x, $y) == -1) {
    echo "{$x} is smaller {$y}";
}