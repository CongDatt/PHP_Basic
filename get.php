<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// get : data will display in URL


// if(isset($_POST)) { // isset : true => is already existed
//     echo $_POST['name'] . ", your form is submitted";
// }


?>
<form action="get.php" method="get">
    <input type="text" name="name">
    <input type="password" name="age">
    <button type="submit">submit</button>

</form>

</body>
</html>