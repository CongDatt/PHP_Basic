<?php

$name = 'Cong Dat';
$age = 20;


echo "{$name}"; 
echo "<br>"; // single quotes - var name are echoed as it is
echo '{$name}'; // double quotes - replace the variable values
// echo 'Hi, I am '. $name .'<br>'. 'I am '.$age.' years old';
echo "<br>";

// data types 
// int , float , boolean, null

$year = 2024;
echo "this year is {$year}";

echo "<br>";

$price = 10.5;
print 'the price is'. $price;

echo "<br>";
$is_allow = true;
echo $is_allow; // 1 = true , 0 = false

echo "<br>";

$x = ' hello';
$x = null;
echo $x;
?>