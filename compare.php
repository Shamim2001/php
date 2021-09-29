<?php 
// Object comparing 

class Plannet{
    public $name;

    function __construct($name)
    {
        $this -> name = $name;
    }
}

$e = new Plannet('Earth');
$m = new Plannet('Mars');

if ( $e === $m) {
    echo "Is similar";
} else {
    echo "Not similar";
}