<?php
/*
$fruits = array('a'=>'apple','b'=>'banana', 'o'=>'orange', 'p'=>'Plum','m'=>'Manago');
sort($fruits, SORT_STRING);
print_r($fruits);

$numbers = array(1,13,4, 6, 28, 9);

arsort($numbers);
// print_r($numbers);



// Associative array to search 
echo "=========== \n";

$fruits = array('a'=>'apple','b'=>'banana', 'o'=>'orange', 'p'=>'Plum','m'=>'Manago');
$numbers = array(1, 3,44, 33, 7,8);

// search number
if (in_array(33, $numbers, true )) {
    echo "33 is found \n";
}

$ofset = array_search(33, $numbers);
echo $ofset."\n";

// key search
if (key_exists('o', $fruits)) {
    echo "key b is exists";
}

*/
echo "======= common & diffarent array search \n";
// associative diffarent & interaction search

$fruits1 = array('a'=>'apple','b'=>'banana', 'o'=>'orange', 'p'=>'Plum','m'=>'Manago');
$fruits2 = array('c'=>'pineapple','b'=>'banana', 'm'=>'mango');

$numbers1 = array(1, 2 ,4, 44, 33, 7, 6, 8);
$numbers2 = array(1, 2,44, 33, 12, 11 ,8);

$common = array_intersect($numbers2, $numbers1);
// print_r($common);

$commonf = array_intersect_assoc($fruits1, $fruits2);
// print_r($commonf);


$difference = array_diff_assoc($fruits2, $fruits1);
print_r($difference);
