<?php
// deffernt file data process and save 

$filename = "A:\php/chapter7/f3.txt";
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


/*
// file save data
$fp = fopen($filename, "w"); // file open write mood
foreach($students as $student) {
    $data = sprintf("%s,%s,%s,%s,%s\n", $student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
    fwrite($fp, $data); // data pass this file fp
}
fclose($fp); // file clone is better option
*/


// $fp = fopen($filename, "w"); // file open write mood
// foreach($students as $student) {
//     fputcsv($fp, $student);
// }
// fclose($fp);

 
// differnt data process output
$fp = fopen($filename, "r");

while($student = fgetcsv($fp)) {
    printf("name = %s %s\nage = %s\nclass = %s\nroll = %s\n\n", $student[0],$student[1],$student[2],$student[3],$student[4],);
}
fclose($fp);


// save data and read output data
/*
$fp = fopen($filename, "r");

while($data = fgets($fp)) {
    $student = explode(",",$data);
    printf("name = %s %s\nage = %s\nclass = %s\nroll = %s\n\n", $student[0],$student[1],$student[2],$student[3],$student[4],);
}
fclose($fp);

*/


// data delate code

$data = file($filename); // path track
unset($data[1]); // data remove
print_r($data);
$fp = fopen($filename, "w"); // file open mood
foreach ($data as $line) {
    fwrite($fp, $line);
}
fclose($fp);