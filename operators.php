<?php

$x = 5;
$y = 29;

echo $x % $y; // + - * / % .
echo "<br>";
$z = 10;
$z *= 10; // +=  => z = z + 10 // .= : concat
echo $z;
echo "<br>";
// comparation operators

$a = 10;
$b = 20;
if($a != $b){  // <>: not equal
    echo 'this is true';
}
else {
    echo 'this is false';
}

echo "<br>";

// ++$x
$c = 10;
// echo ++$c; // $c will be plus 1 then set again $c
echo "<br>";
echo $c++; // $c set again then plus 1 
echo $c;


// $x++
// --$x
// $x--
?>