<?php 
include 'header.php';
?>
<script type="text/javascript">
    function dev() 
    {
      let name = document.getElementById('fullname').value;
      let pass = document.getElementById('password').value;
      let pass1 = document.getElementById('password1').value;
      let email = document.getElementById('email').value;
      let mobile = document.getElementById('mobile').value;
      if (name == "") 
      {
        alert("Name must be filled out");
        return false;
      }
      if (pass == "") 
      {
        alert("Password must be filled out");
        return false;
      }
      if (pass1 == "") 
      {
        alert("Confirm Password must be filled out");
        return false;
      }
      if (email == "") 
      {
        alert("Email must be filled out");
        return false;
      }
      if (mobile == "") 
      {
        alert("Mobile must be filled out");
        return false;
      }
      return true;
}
</script>
<center>
<div class="col-lg-6 col-md-6 mb-5">
    <div class="contact__form">
        <form method="POST" action="insert.php">
                <div class="col-lg-6 p-4">
                    <font style="float: ; font-size: 30px; border-bottom: 2px solid orangered;" >Register<br></font>
                </div>           
                <div class="col-lg-6">
                    <input type="text" name="fullname" id="fullname" placeholder="Enter Fullname">
                </div>
                <div class="col-lg-6">
                    <input type="password" name="password" id="password" placeholder="Enter Password">
                </div>
                    <div class="col-lg-6">
                    <input type="password" name="password1" id="password1" placeholder="Enter Confirm Password">
                </div>
                <div class="col-lg-6">
                    <input type="email" name="email" id="email" placeholder="Enter Email">
                </div>
                <div class="col-lg-6">
                    <input type="number" name="mobile" id="mobile" placeholder="Enter Mobile">
                </div>
                 <div class="col-lg-6">
                    <font style="color:red; border:none; font-size:20px;">If Register ?</font><a href="login.php" style="text-decoration:none; color:blue;"> Click Here</a>
                </div><br>
                <div class="col-lg-6">
                    <input type="submit" value="Submit" name="customer_reg" onclick="return dev()" class="btn btn-primary" style="font-size: 25px;background: none; color:black;">
                </div>
        </form>
    </div>
</div>
</center>
<br>
<?php 
include 'footer.php';
?>