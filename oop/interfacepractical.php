<?php
class DistrictCollection implements IteratorAggregate{
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
}

$districts = new DistrictCollection;
$districts ->add("Rajshahi");
$districts ->add("Bogura");
$districts ->add("Pabna");
$districts ->add("Sylhet");
$districts ->add("Borishal");


foreach($districts as $district) {
    echo $district."\n";
}