//WAP to read number of hours, minutes, and seconds and convert them into seconds.<?php

$hr=2;
$min=46;
$sec=40;

$seconds = 3600 * $hr + 60 * $min + $sec;
echo "<br><center><b>".("Seconds-> " . (int)$seconds);

?>