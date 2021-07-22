<?php

$name = 'PHP program';
$age =21;
$question = "how are you?";

$word = "age";

echo $$word;
echo "\n";
echo "{$name}, {$question}";


// constant variable declare

define('PI', 3.1416);

echo "\nMy value =", PI;