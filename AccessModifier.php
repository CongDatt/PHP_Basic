<?php

class Fruit {
    public $name;
    protected $color;
    private $size;
}

$apple = new Fruit();
$apple->name = 'Apple';

$apple->color = 'Red'; // ERROR
$apple->size = '300';// ERROR

// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class

?>