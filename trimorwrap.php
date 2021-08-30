<?php
/*
// <!-- do string trim white space  -->
$string = " Shamim \n ";
$trim = trim($string); // all white space remove
$leftTrim = ltrim($string); // left side white space remove
$rightTrim = rtrim($string); // right side white space remove
echo $trim;
echo PHP_EOL;

echo $leftTrim;
echo PHP_EOL;

echo $rightTrim;
echo PHP_EOL;
echo "Ahmed";
*/

// String word wrap  ===========
echo "string word wrap .\n";

$string = "lorem Lorem Ipsum isssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.";


echo wordwrap($string, 30,"\n", true); // <br /> using website