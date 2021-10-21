<?php
$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];
//echo "The numbers are a = $a, b = $b, c = $c <br>";
if(($a > $b) && ($a > $c))
{  
	echo "<center><b>"."A = $a is the biggest number";
}
else if(($a < $b) && ($b > $c)) 
{ 
	echo "<center><b>"."B = $b is the biggest number";
}
else
{ 
	echo "<center><b>"."C = $c is the biggest number";
}
?>
