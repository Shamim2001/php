<?php
// Exception function 

class Student{
    function __construct($name, $age)
    {
        $this->name =$name;
        if($age < 4) {
            throw new Exception("Too Young", 1001);
        }elseif($age < 35) {
            throw new Exception("Too Old", 1002);
        }

        $this->age =$age;
    }
}

try{
    $s = new Student('Rahim', 34);
} catch(Exception $e) {
    echo $e->getCode().":".$e->getMessage()."\n";
}


echo "=========================\n";



// custome Exception create========

class MyException extends Exception{};
class NetworkException extends Exception{};

function testException() {
    throw new NetworkException(); // NetworkExecution
}

try {
    testException();
} catch(MyException $e){
    echo "MyExcution Caught";
} catch(NetworkException $e) {
    echo "NetworkExecution Caught";
} finally{
    echo "\nCleaned Up";
}
