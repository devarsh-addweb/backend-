<?php 
session_start();
include "conn.php";
include "header.php";
if(!$_SESSION['email'])
{
	header('Location: index.php');
}
?>

<?php 
$qq=$_SESSION['email'];
  $q="SELECT fullname FROM student WHERE email='$qq'";
  $result=mysqli_query($conn,$q);
  $row=mysqli_fetch_assoc($result);
  $name=$row['fullname'];
echo "<br>";
echo "<p style='margin-left:20px;font-size:25px; color:grey;'>hello ".$name;
?>
<center>
  <img src="img/rock.png"style="height: 500px;">
</center>
</body>
</html>
