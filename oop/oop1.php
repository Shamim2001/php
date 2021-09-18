<?php 
// class 
class Person{
    public $name;
    function sayHi(){
         $this->sayName();
    }
    function sayName(){
        echo "my name is {$this ->name}";
    }
}
// Objects
$p1 = new Person();
$p1->name = 'shamim';

$p1 ->sayHi();
