<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILES</title>
</head>
<body>
    <?php

    // how to upload files
    // 1. upload to the rooot
    // 2. upload to the database
    
    echo $Name = $_FILES['file']['Name'];
    ?>

    <form action="file.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">submit</button>
    </form>
</body>
</html>