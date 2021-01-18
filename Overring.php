<?php

class Fruit {
    public $name;

    function __construct($name){
        $this->name = $name;
    }

    function intro(){
        echo "My name is {$this->name}";
    }
}

class Apple extends Fruit {
    public function intro(){ //Inherited methods can be overridden by redefining the methods (use the same name) in the child class
        echo "Name is something...{$this->name}";
    }
}

$apple = new Apple("Apple1");
echo $apple->intro();
?>

<!-- // The final keyword can be used to prevent class inheritance or to prevent method overriding. -->