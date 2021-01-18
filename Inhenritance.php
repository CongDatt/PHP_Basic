<?php

// inhenritance : When a class derives from another class 
// The child class will inherit all the public and protected properties and methods from the parent class. 
// In addition, it can have its own properties and methods.
// An inherited class is defined by using the extends keyword.

class People {
    public $name;
    public $height;

    function __construct($name, $height){
        $this->name = $name;
        $this->height = $height;
    }
    public function Intro(){
        echo "hello my name is {$this->name} ";
    }
}

class Student extends People {
    public function mess(){
        echo "Am I Dat or who ?";
    }
}

$Dat = new Student('Dat','170');
echo $Dat->Intro();
echo "<br>";
echo $Dat::mess(); // $Dat -> mess();
// echo $Dat::$height;


?>