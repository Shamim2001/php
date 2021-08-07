<?php

$fruits = array('apple', 'banana', 'orange', 'plum', 'manago');

$random = array("a"=>12, "b"=> 13, "c"=> 22, "d"=> 33, 12=>80, "e"=> 77);

// $fruitsCut1 = array_slice($fruits, 1, 3);
// $fruitsCut2 = array_slice($fruits, 3, null, true);

// $newFruits = array_merge($fruitsCut1, $fruitsCut2);

// print_r($newFruits);
// print_r($fruitsCut1);
// print_r($fruitsCut2);

// $newFruitsPlus = $fruitsCut1 + $fruitsCut2;
// print_r($newFruitsPlus);

$r1 = array_slice($random, 1,3, true);
$r2 = array_slice($random, 4, null, true);
$r3 = array("j"=> 87, "k"=>45);

$randomData = array_splice($random, 1, 3, array("g"=> 87, "h"=>89));
$randomDataCorrentWay = $r1+$r2+$r3;

print_r($random);
print_r($randomDataCorrentWay);