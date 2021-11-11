<?php 
include 'header.php';
?>
<br><br><br>
<center>
<div class="col-lg-6 col-md-6 mb-5">
    <div class="contact__form">
        <form method="POST" action="">
                <div class="col-lg-6 p-4">
                    <font style="float: ; font-size: 30px; border-bottom: 2px solid orangered;" >Log in<br></font>
                </div>           
                <div class="col-lg-6">
                    <input type="text" name="email" placeholder="Email Id">
                </div>
                <div class="col-lg-6">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="col-lg-6">
                    <font style="color:red; border:none; font-size:20px;">If Not Register ?</font><a href="register.php" style="text-decoration:none; color:blue;"> Click Here</a>
                </div><br>
                <div class="col-lg-6">
                    <input type="submit" name="customer_reg " value="Login" class="btn btn-primary" style="font-size: 25px; background: none; color:black;">
                </div>
        </form>
    </div>
</div>
</center>
<?php 
include "conn.php";
error_reporting(0);
if(isset($_POST['customer_reg ']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];

  $query="SELECT email,password FROM customer_reg  WHERE email='$email' AND password='$password'";
  //echo $query;
  $result=mysqli_query($conn,$query) or die("Error in Query");

  //print_r ($result);
  
  $rows = mysqli_num_rows($result);
  //echo $rows;
   if($rows > 0)
   {
     session_start();
      //$_SESSION['email'] = $email;
      //header('Location:insert_pro.php');
      echo "hello";
   }
   else
   {
     echo "<br><br><center><b>Email and Password are Wrong</b></center>";
   }
   
}
?>
<br><br>
<?php 
include 'footer.php';
?>
