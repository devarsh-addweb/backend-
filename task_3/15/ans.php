<?php

$x=$_POST['number'];
$sum = 0;
$m = NULL;

echo "The sum of ", $x, " digits is = ";

while ($x > 0) {
    $m = $x % 10;
    $m = intval ($m);
    $sum = $sum + $m;
    $x = $x / 10;
    $x = intval ($x);
}

echo $sum;

?>