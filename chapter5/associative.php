<?php

$foods = [
    'vagetabels' => 'brinjal, brocolli, carrot, capsicam',
    'fruits' => 'Orange, Banana, Apple',
    'drinks' => 'water, milk'
];

$foods['drinks'].= ", Orange Juice";

foreach ($foods as $key => $value) {
    echo $key."=". $value."\n";
}



