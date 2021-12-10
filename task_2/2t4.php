Program to calculate the area of a circle while the circumference is given.

<?php

	$r = 100;
	$pi = 3.14;
	$area = $pi * $r * $r;
	echo "<center><b>Area of a Circle is: ".$area;
	$circumference = 2*$pi*$r;
	echo "<br>"."Circumference of a circle is: " .$circumference;
?>