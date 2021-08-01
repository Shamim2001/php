<?php
include_once "isFunction.php";

$n = 12;

if (isEven($n)) {
    echo "{$n} is an Even number";
} else {
    echo "{$n} is an Odd number";
}