<?php

// data extract 
/*
$fruits = array('apple', 'banana', 'orange', 'plum', 'manago');

$someFruits = array_slice($fruits, 2, 2);

print_r($fruits);


// associative array of data extract
$random = array("a"=>12, "b"=> 13, "c"=> 22, "d"=> 33, "e"=> 77);

$randomData = array_slice($random, 3, 4, true);
print_r($randomData);

*/

// array cut value
$fruits = array('apple', 'banana', 'orange', 'plum', 'manago');

$newFruits = array('jackfruit', 'tamaring', 'pineapple');

$fruitsCut = array_splice($fruits, -4, 2, $newFruits);

print_r($fruitsCut);
print_r($fruits);