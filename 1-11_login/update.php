<?php 
include 'conn.php';

$id=$_GET['id'];

if(isset($_POST['update']))
{

	$fullname=$_POST['fullname'];
	$password=$_POST['password'];
	$email=$_POST['email'];	
	$mobile=$_POST['mobile'];

	echo $q="UPDATE student SET fullname='$fullname',password='$password',email='$email',mobile='$mobile' WHERE id=".$id;

	$result=mysqli_query($conn,$q);
	
	if(!$result)	
	{
		echo "record not updated";
	}
	header('Location:data.php');
}
?>