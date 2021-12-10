// PHP program to convert days into years, weeks and days
<?php

$d = 777;
$y = NULL;
$w = NULL;

// d = days
// y = years
// w = weeks

// Conversion of days in to years, weeks and days
echo "<center><b>";
$y = (int)($d / 365);
$w = (int)(($d % 365) / 7);
$d = (int)($d - (($y * 365) + ($w)));

// Output
echo $y . "-Year"."<br>" . $w . "-Weeks "."<br>" . $d . "-Days\n";

?>