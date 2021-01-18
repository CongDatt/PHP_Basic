<?php 

class Fruit {
    // properties : thuoc tinh 
    public $name;
    public $color;

    // menthods 
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$apple = new Fruit();
$apple->set_name("apple 1 ");
echo $apple->get_name();

?>