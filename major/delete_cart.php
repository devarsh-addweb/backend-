<?php

include 'conn.php';

$id=$_GET['cart_id'];

	echo $q="DELETE FROM cart WHERE cart_id=".$id;
	$check=mysqli_query($conn,$q);

	if(!$check)
	{
		echo "  not delete"."<br>";
	}
	else
	{
		echo "deleete";		
	}
	header('Location:cart.php');
?>