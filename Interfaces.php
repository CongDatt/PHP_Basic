<?php

// what methods a class should implement

// interface vs abstract
// Interfaces cannot have properties, while abstract classes can
// All interface methods must be public, while abstract class methods is public or protected
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
// Classes can implement an interface while inheriting from another class at the same time

interface Animal { // key : interface
    public function makeSound();
}

class Cat implements Animal {
    public function makeSound(){ // must be public
        echo "meo` meo' meo ";
    }
}


class Dog implements Animal {
    public function makeSound(){
        echo "gauw gauw";
    }
}

class Mouse implements Animal {
    public function makeSound(){
        echo "aaaa";
    }
}
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

foreach($animals as $animal){
    $animal->makeSound();
    echo "<br>";
}


?>