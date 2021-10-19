<?php
// trait conflict oop 
trait A{
    function someFunc() {
        echo 'A';
    }
    function otherFunc() {
        echo 'b';
    }
}
trait B{
    function someFunc() {
        echo "a";
    }
    function otherFunc() {
        echo "B";
    }
}

class MyClass{
    use A,B {
        A::someFunc insteadof B;
        B::otherFunc insteadof A;
    }
}


class Aliased_Talker {
    use A, B {
        B::someFunc insteadof A;
        A::otherFunc insteadof B;
        B::otherFunc as talk;
    }
}



