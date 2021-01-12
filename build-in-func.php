<?php

// math 

echo ceil(1.01) ."<br>"; // lam tron len
echo floor(1.99) ."<br>"; // lam tron xuong
echo round(1.49) ."<br>"; // lam tron xuong khi < 5

// string

$str = 'hello dat' ;
echo strlen($str); // get the length of string 
echo "<br>";

$name = "this is my name";
echo str_word_count($name);

echo "<br>";
echo ucwords($str); // hello dat -> Hello Dat

echo "<br>";
$mail = "Dat@gamil.com";
if(strpos($mail,'@')){
    echo 'valid email';
}
else {
    echo 'not valid email';
}
echo "<br>";
// Array



?>