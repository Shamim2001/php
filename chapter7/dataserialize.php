<?php

// array data serialized data process 
$filename = "A:\php/chapter7/f5.txt";
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
    )
);

$student = array(
    'fname'=> 'Rahim',
    'lname' => 'Rahman',
    'age' => 12,
    'class' => 7,
    'roll' => 17
);

// $data = serialize($students); // data serialize function
// file_put_contents($filename, $data, LOCK_EX); // data s


// =======from data read file ======
$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);



// =======data push array=====

array_push($allStudents, $student);

$data = serialize($students); // data serialize function
file_put_contents($filename, $data, LOCK_EX); 

