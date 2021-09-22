<?php
// constructor function

use Person as GlobalPerson;

class Person{
    public $name;
    public $age;

    public function __construct($personName, $personAge=0){
        // echo 'New Person objects created',"\n";
        $this->name = $personName;
        $this->age = $personAge;
    }

    public function sayHi(){
         $this->sayName();
    }
    public function sayName(){
        if($this ->age ) {
            echo "my name is {$this ->name}, I am  {$this ->age} years old. \n";
        } else {
            echo "my name is {$this ->name}, I don't know how old I am. \n";
        }
        
    }
}

$p1 = new Person('Shamim', 21);
$p2 = new Person('sadik', 33);
$p3 = new Person('sadik');
echo $p1->sayHi();
echo $p2->sayHi();
echo $p3->sayHi();