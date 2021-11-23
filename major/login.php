<?php
session_start(); 
ob_start();
include 'header.php';
?>


<body>
    <br><br>
<form method="POST" action="login.php">

<div class="container mt-5" style="width:40%; ">
  <div class="row">
    <div class="col-lg-12">
        <h2 class="p-2 mb-3" style="border-bottom:5px solid green; width: 20%;">Log in</h2>
      <div class="mb-3 ">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><font style="color:red; border:none; font-size:20px;">Don’t have an account? </font><a href="register.php" style="text-decoration:none; color:blue;">Click Here</a></label>
        <div id="emailHelp" class="form-text"></div>
      </div>
      
      <center><input type="submit" name="login" value="Log in" class="btn btn-success mb-5"></center>
    </div>
</div>
</div>

</form>
</div>
</body>
</html>

<?php 
include "conn.php";
//error_reporting(0);
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];

  echo $query="SELECT email,password FROM customer_reg WHERE email='$email' AND password='$password'";
  //echo $query;
  $result=mysqli_query($conn,$query);

  //print_r ($result);
  
  //$rows = mysqli_num_rows($result);
  //echo $rows;
   if(mysqli_num_rows($result) > 0)
   {
     
      $_SESSION['email'] = $email;
      header('Location:index.php');
      
   }
   else
   {
     echo "<br><br><center><b>Email and Password are Wrong</b></center>";
   }
   
}

?>
<?php 
include 'footer.php';
?>