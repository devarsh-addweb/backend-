12. Read an array and print it in ascending order.(SORTING)
<?php 

 echo "<be><center>";

// $a=array(12,12);

// sort($a);

?>

<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

</body>
</html>