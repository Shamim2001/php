<?php

/*
// range function use & stepping

// $numbers = array();
// for ($i = 12; $i <= 20; $i++) {
//     array_push($numbers, $i);
// }

$numbers = range(11, 20, 2);
// print_r($numbers);

foreach(range(0, 60, 7) as $number) {
    if ($number > 0) {
        echo $number. "\n";
    }
    
}
*/
// array shuffle & random number discustion
echo "=======shuffle & random number  \n";

$numbers = range(40, 72);
// print_r($numbers);

// random number create
$random = mt_rand(0, 32);
// print_r($random);

$luck = $numbers[$random];
if ($luck % 2 == 0) {
    echo "Head \n";
} else {
    echo "Tail";
}


shuffle($numbers);
print_r($numbers);

$randomNum= $numbers[3];

echo $randomNum;