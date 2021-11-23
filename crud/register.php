
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- star link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- end-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        body{
  margin: 0;
  padding: 0;
  background: url(img/bg1.jpg) no-repeat;
  background-size: cover;
  /*background-image: linear-gradient(to right, skyblue , #e0c870);*/
}
    .select, .slc{
      background: none;
      font-size: 20px;
      border: none;
      border: 2px solid orange;
      border-radius: 5px;
      padding: 5px;
      margin-left: 300px;
    }
    #grace img{
      filter: grayscale(100%);
    }
    </style>

</head>
<body>
   <!-- Start Navbar -->
    
<!-- navbar ends -->

</head>
<body>
	<br><br>
<form method="POST" action="insert.php">
<div class="container mt-5" style="width:40%; ">
	<h2 class="mb-3" style="border-bottom:4px solid green; width: 20%;">Registration</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" name="fullname" class="form-control" id="exampleInputtext" >
    <div id="emailHelp" class="form-text"></div>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
    <input type="number" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><font style="color:red; border:none; font-size:20px;">Already have an account? </font><a href="index.php" style="text-decoration:none; color: blue;">Click Here</a></label>
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <input type="submit" name="register" value="Register" class="btn btn-success" style="width:100%;">
</div>

</form>
</body>
</html>
<br><br>

