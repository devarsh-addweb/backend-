Program to calculate the Simple Interest and Compound Interest.

<?php 

$p=1000; //p= principle
$t=1; //t=time period
$r=2; //r= rate and interest

//Simple Interest formula
$si = $p * $t * $r/100;
echo "<br><center><b>"."Simple interest = ".$si."<br>";
//Compound Interest formula
$amount = $p * pow((1 + $r/100),$t);
$ci = $amount - $p;
echo "Compound interest = ".$ci ;

?>