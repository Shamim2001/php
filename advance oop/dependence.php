<?php

interface BaseStudent{
    function displayName();
}

class ImprovedStudent implements BaseStudent{
    private $name;
    private $title;
    function __construct($name, $title) {
        $this->name = $name;
        $this->title = $title;
    }

    function displayName() {
        echo "Hello From {$this->title}. {$this->name}";
    }
}
class Student implements BaseStudent{
    private $name;
    function __construct($name) {
        $this->name = $name;
    }

    function displayName() {
        echo "Hello From".$this->name;
    }
}

// class StudentManager{
//     function introStudent($name) {
//         $st = new Student($name);
//         $st-> displayName();
//     }
// }

class StudentManager{
    function introStudent(BaseStudent $Student) {
        $Student-> displayName();
    }
}

$st = new Student(" john Doe");
$ist = new ImprovedStudent("john Doe", "Mr");
$sm = new StudentManager();
$sm->introStudent( $ist);