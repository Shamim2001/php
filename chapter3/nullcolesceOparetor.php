<?php
$default_lat = 23.9;
$default_lon= 90.8;

$user_lat;

// ternary operator
// $lat = isset($user_lat) ? $user_lat : $default_lat;

// null colesce oparetor
$lat = $user_lat ?? $default_lat;

echo $lat;

// if / else codition check
// if (isset($user_lat)) {
//     $lat = $user_lat;
// } else {
//     $lat = $default_lat;
// }