<?php
$fname= "Shamim";
$lname = "Ahmed";
$middlename = 'nothng';

/*
$fname is first value and $lname is second value. but I'm used first value $lname and second value $fname. output is "Ahmed Shamim".It's not meaningful . It's pure meaningfully Shamim Ahmed.
*/

// printf("My full name is %s %s", $lname, $fname);

printf('My full name is %3$s, %2$s %1$s', $lname, $middlename, $fname);
echo "\n";

printf('the binary equivalent of %1$d is %1$d',12);
echo "\n";
//floting number print
$n = 32.123;

printf("%.2f", $n);
echo "\n";

$num = 123;

printf("%03d \n", $num);