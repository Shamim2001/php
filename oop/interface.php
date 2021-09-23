<?php
interface Animal{
    function makeSound();
}

class Cat implements Animal{
    function makeSound()
    {
        echo "Meo";
    }
}
class Dog implements Animal{
    function makeSound()
    {
        echo "Geo";
    }
}
class Mouse implements Animal{
    function makeSound()
    {
        echo "Squeak";
    }
}
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$dog -> makeSound();
echo PHP_EOL;
$mouse -> makeSound();
echo PHP_EOL;
$cat -> makeSound();