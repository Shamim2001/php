<?php
// inheritance is  the best of code practice
/*
class Human{
    public function eat() {
        echo "I am Eating";
    }
    public function run() {
        echo "I am Eating";
    }
    public function adda() {
        echo "I am Eating";
    }
    public function sleap() {
        echo "I am Eating";
    }
    public function great(){} // Emty function
}
// inheritance
class Man extends Human{
    public function great() {
        echo 'says hi!';
    }
}
class woman extends Human{
    public function great() {
        echo 'says hello!';
    }
}
class child extends Human{
    public function great() {
        echo 'says hi there!';
    }
}

// objects
$shamim = new man();
echo $shamim -> great(); // check eat()/ add()/ sleep()

$child= new Human();
echo $child -> eat();

*/
abstract class shape{
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends shape{

    private $base, $height;

    function __construct($base, $height){
        $this ->base = $base;
        $this ->height =$height;
    }
    
    public function setBase($base) {
        $this ->base = $base;
    }
    
    public function setHeight($height) {
        $this ->height = $height;
    }

    function getArea() {
        return $this->base*$this->height;
    }
    function getPerimeter()
    {
        
    }
}

class Triangle extends shape{
    public function setHeight($height) {
        $this -> height = $height;
    }

    function getArea() {
        // return $this->base*$this->height;
    }
    function getPerimeter()
    {
        
    }
}

$triangle = new Rectangle(10,10);
echo $triangle ->getArea();
