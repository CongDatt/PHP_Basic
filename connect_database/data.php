<?php

$dbHost ="localhost";
$dbUser ="root"; 
$dbPass ="";
$dbName ="phptutorial"; // ten database


//connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName); 

if($conn) {

}
else {
    die("database have problems");
}

?>