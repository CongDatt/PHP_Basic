<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $n1 = "";
        $n2 = "";
        $caculate = "";
        $result = "";
        $flag = true;
        if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["operation"])){
            $n1 = $_POST["number1"];
            $n2 = $_POST["number2"];
            $caculate = $_POST["operation"];
        }
        if(is_numeric($n1) && is_numeric($n2)){
            switch($caculate){
            case "+":
                $result = $n1 + $n2;
            break;
            case "-":
                $result = $n1 - $n2;
            break;
            case "*":
                $result = $n1 * $n2;
            break;
            case "/":
                $result = $n1 / $n2;
            break;
        }
        }
        else{
            $flag = false;
        }
    ?>
    <div class="content">
        <h1>Caculator</h1>
        <form action="" method="post" name="main-form">
        <div class="row">
            <span>First number :</span>
            <input type="text" name="number1" value="<?php echo $n1;?>">
            <div></div>
            <span>operation :</span>
            <input type="text" name="operation" value="<?php echo $caculate?>">
        </div>
        <span>second number :</span>
            <input type="text" name="number2" value="<?php echo $n2;?>">
        </div>
        <div class="row">
            <input type="submit" value="xem ket qua">
        </div>
        <div class="row">
        <p> <?php 
            if($flag == true){
                echo $n1 ." ".$caculate." ".$n2. " = " .$result ;
            }else{
                echo "can not excute ";
            }
        ?></p>
        </div>
        </form>
    </div>
</body>
</html>