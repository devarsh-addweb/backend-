<?php 
session_start();

if(!$_SESSION['email'])
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- star link-->
    
    <!-- end-->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
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


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>home pages</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php 
$qq=$_SESSION['email'];
  $q="SELECT fullname FROM student WHERE email='$qq'";
  $result=mysqli_query($conn,$q);
  $row=mysqli_fetch_assoc($result);
  $name=$row['fullname'];
echo "<br>";

?>
    <ul class="nav justify-content-center" style="background-color: whitesmoke;">
  <li class="nav-item">
    <p class="" aria-current="page" style='margin-left:-650px;font-size:22px; color:black; text-decoration: none'><?php echo "Hello ".strtoupper($name); ?></p>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="data.php" tabindex="-1" aria-disabled="true">User Data</a>
  </li>
  <!-- <li class="nav-item" >
    <a href="logout.php" class="link-danger" style="font-size: 25px; margin-left: 100px; ">Log out</a>
  </li> -->
</ul>
<div style="margin-top: -50px;">  
    <a href="logout.php" class="link-danger" style="font-size: 25px; margin-left: 85%;margin-bottom:-70px; ">Log out</a> 
</div>