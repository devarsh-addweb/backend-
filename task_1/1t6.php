//WAP to read basic salary from user and calculate gross salary where DA 40% of basic.
<?php
$basic=10000;
$hra=0.02;
$da=0.04;

echo "Basic salary : ".$basic;

$hra=$hra*$basic;
$da=$da*$basic;
$gross=$basic+$hra+$da;

echo "<br><br><center><b>"."HRA : ".$hra."<br>";
echo "DA : ".$da."<br>";
echo "Gross salary : ".$gross."<br>";

?>