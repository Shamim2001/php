<?php
// Countable implements interface practise

class DistrictCollection implements IteratorAggregate, Countable{
    private $districts;

    function __construct() {
        $this ->districts = array();

    }

    function add($district) {
        array_push($this->districts, $district);
    }

    // function getDistricts(){
    //     return $this->districts;
    // }
    
    function getIterator(){
        return new ArrayIterator($this->districts);
    }

    function count(){
        return count($this->districts);
    }
}

$districts = new DistrictCollection;
$districts ->add("Rajshahi");
$districts ->add("Bogura");
$districts ->add("Pabna");
$districts ->add("Sylhet");
$districts ->add("Borishal");
$districts ->add("Dhaka");

echo count($districts);