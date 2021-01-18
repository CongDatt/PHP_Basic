<?php

class Fruit {

    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }
}

$Apple = new Fruit("Apple","Red");
echo $Apple->get_name();
echo "<br>";
echo $Apple->get_color();

?>