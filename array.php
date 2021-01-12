<?php 

$car1 = 'audi';
$car2 = 'Mer';
$car3 = 'BWM';

$cars = array('BMW','Mer','audi');
$cars2 = array('BMW1','Mer2','audi2');
echo $cars[0];
echo "<br>";

echo var_dump($cars); // var_dump used to get infor of var

echo "<br>";
$merge = array_merge($cars, $cars2); // concat 2 arrays

print_r ($merge);

echo "<br>";

$carss = array("Audi" => 40,"BMW" => 90, "HonDa" => 100);
foreach ($carss as $key => $value){
    echo "My cars is {$key}". " has". $value ." kms";  
    echo "<br>";
}


?>