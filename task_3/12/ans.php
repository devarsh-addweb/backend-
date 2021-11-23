<?php  
$num = $_POST['num1'];  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "<center><b>Factorial $num is $factorial";  
?>  