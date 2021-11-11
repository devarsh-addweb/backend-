<?php 
include 'header.php';
?>

<center>
<div class="col-lg-6 col-md-6 mb-5">
    <div class="contact__form">
        <form method="POST" action="insert.php">
                <div class="col-lg-6 p-4">
                    <font style="float: ; font-size: 30px; border-bottom: 2px solid orangered;" >Register<br></font>
                </div>           
                <div class="col-lg-6">
                    <input type="text" name="fullname" placeholder="Enter Fullname">
                </div>
                <div class="col-lg-6">
                    <input type="password" name="password" placeholder="Enter Password">
                </div>
                    <div class="col-lg-6">
                    <input type="password" name="password1" placeholder="Enter Confirm Password">
                </div>
                <div class="col-lg-6">
                    <input type="email" name="email" placeholder="Enter Email">
                </div>
                <div class="col-lg-6">
                    <input type="number" name="mobile" placeholder="Enter Mobile">
                </div>
                 <div class="col-lg-6">
                    <font style="color:red; border:none; font-size:20px;">If Register ?</font><a href="login.php" style="text-decoration:none; color:blue;"> Click Here</a>
                </div><br>
                <div class="col-lg-6">
                    <input type="submit" value="Submit" name="customer_reg" class="btn btn-primary" style="font-size: 25px;background: none; color:black;">
                </div>
        </form>
    </div>
</div>
</center>
<br>
<?php 
include 'footer.php';
?>