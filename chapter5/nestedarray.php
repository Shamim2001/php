<?php

$foods = [
    'vagetabels' => explode(', ', 'brinjal, brocolli, carrot, capsicam'),
    'fruits' => explode(', ', 'Orange, Banana, Apple'),
    'drinks' => explode(', ', 'water, milk')
];

print_r($foods);

array_push($foods['drinks'],'orange juice');

print_r($foods);