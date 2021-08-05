<?php

// copy by value 
$person = array('fname'=> 'Shamim', 'lname'=> 'Ahmed');
$changePerson = $person;
$changePerson['lname']= 'Hossain';

print_r($person);
print_r($changePerson);



// copy by refarence

$person = array('fname'=> 'Shamim', 'lname'=> 'Ahmed');
$changePerson = &$person; // & symbol add
$changePerson['fname']= 'Sadik';

print_r($person);
print_r($changePerson);



// associative array / remove data
$person = array('fname'=> 'Shamim', 'lname'=> 'Ahmed');
print_r($person);

// remove data
unset($person['lname']);
print_r($person);