<?php

// function structure
function Hello(){
    echo "this is a function";
}
Hello();

echo "<br>";
// function with paramenter

function Sayhi($name){
    echo "hello {$name}";
}
Sayhi('Dat');

// return 
echo "<br>";
function Add($a, $b){
    return $a + $b;
}
echo Add(3,2);
?>