<?php 

include "conn.php";


$id=$_GET['id'];

$q="DELETE FROM student where id=".$id;
$result=mysqli_query($conn,$q);


header('Location: data.php');

?>