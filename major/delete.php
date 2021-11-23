<?php 
include 'conn.php';


	$id=$_GET['man_id'];

	$q="DELETE FROM man WHERE man_id=".$id;
	$check=mysqli_query($conn,$q);

	if(!$check)
	{
		echo " mal not delete"."<br>";
	}
	else
	{
		echo "mal delete"."<br>";
	}
	//header('Location:man_pro.php');

	$id=$_GET['female_id'];

	$q="DELETE FROM female WHERE female_id=".$id;
	$check=mysqli_query($conn,$q);

	if(!$check)
	{
		echo " female not delete"."<br>";
	}
	else
	{
		echo "female delete"."<br>";
	}
	//header('Location:female_pro.php');

	$id=$_GET['kids_id'];

	$q="DELETE FROM kids WHERE kids_id=".$id;
	$check=mysqli_query($conn,$q);

	if(!$check)
	{
		echo " kids not delete"."<br>";
	}
	else
	{
		echo "kids delete"."<br>";
	}

	header('Location:category.php');

?>