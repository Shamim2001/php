<?php

$fruits = array('a'=>'apple','b'=>'banana', 'o'=>'orange', 'p'=>'Plum','m'=>'Manago');
sort($fruits, SORT_STRING);
print_r($fruits);

$numbers = array(1,13,4, 6, 28, 9);

arsort($numbers);
// print_r($numbers);