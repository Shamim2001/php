<?php

$vagitables = ('brinjal, brocolli, carrot');

// convert to array
$vagetables = explode(', ', 'brinjal, brocolli, carrot');

// echo $vagetables[1]; 


// array to string convert
$vagitableString = join(', ', $vagetables);
// echo $vagitableString;

echo count($vagetables);