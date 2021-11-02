<?php 
session_start();
if(!$_SESSION['email'])
{
	header('Location:index.php');
}

include 'conn.php';
include "header.php";
$q="SELECT * FROM student";
$result=mysqli_query($conn,$q);

?>
<br><br><br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>data fetch</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<form>
	<table  align="center" cellpadding="5" cellspacing="5"  style="width:50%;" class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Fullname</th>
			<th>Password</th>
			<th>Email</th>
			<th>Mobile</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
			 while($row=mysqli_fetch_assoc($result))
			 {
			 	?>
			 		<tr>
				 		<th><?php echo $row['id']; ?></th>
						<th><?php echo $row['fullname']; ?></th>
						<th><?php echo $row['password']; ?></th>
						<th><?php echo $row['email']; ?></th>
						<th><?php echo $row['mobile']; ?></th>
						<th><a href="delete.php?id=<?php echo $row['id']; ?>" style="text-decoration:none; color:white; background-color: red; border-radius: 5px; float: right; height: 20px; width: 70px; font-size: 15px; text-align: center;">DELETE</a></th>
						<th><a href="edit.php?id=<?php echo $row['id']; ?>" style="text-decoration:none; color:white; background-color: green; border-radius: 5px; float: right; height: 20px; width: 70px; font-size: 15px; text-align: center;">EDIT</a></th>
					</tr>
			 	<?php
			 }
		?>
		</table>
		<center><center><a href="home.php" class="link-success" style="font-size: 20px;">BACK</a></center></center>
	
</form>
</body>
</html>