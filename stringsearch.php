<?php

$string = "My name is Shamim Ahmed";

// echo $string[11];

// echo strpos($string, "Shamim \n"); // srtpos() string search keyword

// echo stripos($string, "shamim"); // srtipos() string search incase sensitive keyword

// echo strripos($string, "shamim"); // strripos() string search last value incase sensitive  keyword

echo strrpos($string, "d"); // strrpos() string search last value keyword
echo PHP_EOL;


// =========string search string=========

$string = "My name is Samim SHAMIM Ahmed";

$replacedString = str_replace('Samim', 'Shamim', $string); // Samim replace Shamim

echo $replacedString;