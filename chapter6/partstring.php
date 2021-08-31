<?php

// part by part string 
$string = "hello world, How are you";

$parts = explode(" ", $string);
print_r($parts);

echo PHP_EOL;

$original = join(" ", $parts);
echo $original;

echo PHP_EOL;

// $parts2 = str_split($string);
// print_r($parts2); // string token output

echo PHP_EOL;

$parts3 = strtok($string, " ");
while ($parts3 !== false) {
    echo $parts3;
    echo PHP_EOL;
    $parts3 = strtok(" ");
}
echo PHP_EOL;

$parts4 = preg_split("/ |,/",$string);
print_r($parts4);