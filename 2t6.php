<?php

// PHP program to enter the marks of five subjects and calculate total, average, and percentage

$p = 50;
$c = 90;
$m = 87;
$e = 68;
$h = 80;
$total = NULL;
$average = NULL;
$percentage = NULL;

// p, c, m, e, and h are the five subjects
// p = physics
// c = chemistry
// m = math
// e = english
// h = history

// Calculate total, average and percentage
$total = $p + $c + $m + $e + $h;
$percentage = ($total / 500) * 100;

// Output
echo "<center><b>The Total marks   = " . $total . "/500"."<br>";
echo "The Percentage    = " . $percentage . "%";

?>