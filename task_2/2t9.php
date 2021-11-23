Program to calculate the time given in Seconds into hours, minutes and seconds.
<?php
//WAP to convert total number of seconds into hours, minutes, and seconds.
$seconds = 6009;

$secs = $seconds % 60;
$hrs = $seconds / 60;
$mins = $hrs % 60;

$hrs = $hrs / 60;

echo "<center><b>"."HH:MM:SS------ " . (int)$hrs . ":" .(int)$mins . ":" .(int)$secs;

?>