<?php
// static scope 

class A{
    protected static $name;

    static function sayHi(){
        self::$name = "shamim\n";
        echo "Hi From A\n";
        
    }
}
class B extends A{
    static function sayHi(){
        parent::sayHi();
        echo parent::$name;
        echo "Hi From B\n";
        
    }
}

B::sayHi();


// ==========Constant variable define========= 
// define('ok', 123);
// echo ok;
const city = "Dhaka\n";
const City = "Pabna";

echo city;
echo City;

