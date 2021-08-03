<?php

$names = array(
    "shamim",
    "rahim",
    123,
    "karim"
);
$names[2] = "sadik";

// method using defarence 
$name = array_pop($names);
$name = array_shift($names);
$name = array_unshift($names, "malik");
$name = array_push($names, "rahman");

$count = count($names);

for ($i = 0; $i < $count; $i++) {
    echo $names[$i]. "\n";
}




// foreach loop 
// foreach ($names as $s) {
//     echo $s;
//     echo PHP_EOL;
// }
