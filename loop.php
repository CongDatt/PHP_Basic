<?php

// while, do-while , for, Foreach
$x = 0;
while($x < 10){
    echo $x;
    ++$x;
    echo "<br>";
}
echo "<br>";
$y = 0;
do {
    echo $y;
    ++$y;
    echo "<br>";    
}
while($y < 10);

echo "<br>";


for($z = 0; $z < 10; $z++) {
    echo $z;
    echo "<br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

// break: stop loop
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }
// countinue: do not stop loop
  <?php  
  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
?>