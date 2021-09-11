<?php
//  json format data save in you file
$filename = "A:\php/chapter7/f6.txt";
$students = array(
    array(
        'fname'=> 'Shamim',
        'lname' => 'ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 13
    ),
    array(
        'fname'=> 'Sadikur',
        'lname' => 'rahman',
        'age' => 14,
        'class' => 8,
        'roll' => 11
    ),
    array(
        'fname'=> 'Jubair',
        'lname' => 'ahmed',
        'age' => 13,
        'class' => 7,
        'roll' => 15
    ),
    array(
        'fname'=> 'Abdul',
        'lname' => 'Rahman',
        'age' => 12,
        'class' => 7,
        'roll' => 16
    ),
);

// =======json format data save=======
// $encodeData = json_encode($students);
// file_put_contents($filename, $encodeData, LOCK_EX);


// decode data json file

$decodeData = file_get_contents($filename);
$allStudents = json_decode($decodeData);
print_r($allStudents);

echo $allStudents[1]['fname'];