<?php
abstract class ourClass{
    final function doSomething(){
        echo "Do somethings";
    }
}
class myClass extends ourClass{
    
}
$s = new myClass();
$s-> doSomething();