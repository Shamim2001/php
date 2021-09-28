<?php
// magic methon --get / --set

class Student{
    private $name;
    private $age;
    private $class;

    function __construct($name='', $age='', $class='')
    {
        $this ->name =$name;
        $this ->age =$age;
        $this ->class =$class;
    }
    // get name function
    public function __get($prop)
    {
        return $this -> $prop;
    }
    // set value name function 
    public function __set($prop, $value)
    {
        $this ->$prop = $value;
    }

}

$s = new Student('Shamim','21','13');

$s ->name= "sadiq";
echo $s ->name;