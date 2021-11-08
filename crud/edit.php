<?php 
session_start();
include 'conn.php';
include "header.php";
if(!$_SESSION['email'])
{
	header('Location:index.php');
}

$id=$_GET['id'];
$q="SELECT * FROM student WHERE id=".$id;
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>edit</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<form method="POST" action="update.php?id=<?php echo $id;?>">
<div class="container mt-5" style="width:40%; ">
	<h2 class="mb-3 p-2" style="border-bottom:4px solid indianred; width: 50%;">Update Your Data</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input  type="text" name="fullname" value="<?php echo $row['fullname']; ?>" class="form-control" id="exampleInputtext" >
    <div id="emailHelp" class="form-text"></div>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text" name="password" value="<?php echo $row['password']; ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
    <input type="number" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
    
  <input type="submit" name="update" value="Update" class="btn btn-success" style="width:100%; background-color: indianred;">
</div>
</form>
<br>
<center><a href="data.php" class="link-success" style="font-size: 20px;">BACK</a></center>
</body>
</html>

