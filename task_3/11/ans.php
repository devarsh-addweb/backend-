<?php

$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];
$d = $_POST['num4'];

//echo "The numbers are a = $a, b = $b, c = $c, d = $d <br>";
if(($a > $b) && ($a > $c) && ($a > $d))
{  
	echo "A = $a is the biggest number";
}
else if(($a < $b) && ($b > $c) && ($b > $d)) 
{ 
	echo "B = $b is the biggest number";
}
else if(($a < $c) && ($b < $c) && ($c > $d)) 
{ 
	echo "C = $b is the biggest number";
}
else
{ 
	echo "D= $c is the biggest number";
}
?>
