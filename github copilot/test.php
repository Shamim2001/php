<?php

// count lowest number
function countLowestNumber($numbers) {
    $lowestNumber = $numbers[0];
    $lowestNumberCount = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] < $lowestNumber) {
            $lowestNumber = $numbers[$i];
            $lowestNumberCount = 1;
        } else if ($numbers[$i] == $lowestNumber) {
            $lowestNumberCount++;
        }
    }
}