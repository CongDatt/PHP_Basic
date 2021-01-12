<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <?php
    // cookies: small file that the web serve stored in client computer
    // ARGUMENT 
    // name 
    // value
    // Expire: not expre cookie stored in the current session
    // path
    // Domain
    // sercurity
    $time = time() + 5; // - time to unset
    setcookie("Name","Datt", $time,);

    echo $_COOKIE["Name"];
    ?>
</body>
</html>