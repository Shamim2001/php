<?php
// train oop concept

trait SayWorld{
    function sayHello(){
        echo "Hello World\n";
    }
}

trait SayHi{
    use SayWorld; // call SayHello trait
    function sayHi(){
        echo "Say Hi!";
    }
}

class AddTrait{
    
    use SayHi;
}

$at = new AddTrait();
$at->sayHello();
$at->sayHi();