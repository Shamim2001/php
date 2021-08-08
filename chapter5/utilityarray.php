<?php
/*
// utility function / array_walk / array_map / array_filter

$numbers = array(1,2,3,4,5,6,7,8,9,12);

function square($n) {
    printf("Square of %d is %d \n", $n, $n*$n);
}
// array_walk($numbers, 'square');

// array_map
echo "======= array map \n";
function cube($n) {
    return $n*$n*$n;
} 
$newArray = array_map('cube', $numbers);

print_r($newArray);



// array_filter
echo "======= array filter \n";
function even($n) {
    return $n%2 == 0;
}

function odd($n) {
    return $n%2 == 1;
}
$newFilterEven= array_filter($numbers, 'even');
$newFilterOdd= array_filter($numbers, 'odd');

// print_r($newFilterEven);
// print_r($newFilterOdd);

// s carackter name filter

$persons = array('shamim', 'lemon', 'saju', 'azim', 'milon', 'sajol', 'shamimBibahito');

function filterByS($name) {
    return $name[0] == 's';
}
$filterNewPersons = array_filter($persons, 'filterByS');
print_r($filterNewPersons);

*/

// Utility array / array reduce


$numbers = array(1,2,3,4,5,6,7,8,9,12);

function sum($oldValue, $newValue) {
    if ($newValue % 2 == 1) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$reduceArray = array_reduce($numbers, 'sum');
echo $reduceArray;