<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// SESSION
session_start();

// storing infomation
$_SESSION["name"] = "Cong Datt";
$_SESSION["Age"] = 24;

echo "Hello {$_SESSION["name"]}";

session_destroy();
?>

</body>
</html>