<?php 
include 'header_a.php';
include 'conn.php';

$q="SELECT * FROM Category";
$result=mysqli_query($conn,$q)

?>

<center>
<div class="col-lg-6 col-md-6 mb-5">
    <div class="container">
    <div class="row">
       
    <div class="col-12" style="background-color: #f5f3ed;">
    <div class="contact__form">
        <form method="POST" action="insert.php" enctype="multipart/form-data">
                <div class="col-lg-6 p-4">
                    <font style="float: ; font-size: 30px; border-bottom: 2px solid orangered; font-size: 30px;" >Category<br></font>
                </div>        
                <div class="col-lg-6">
                    <input type="text" style="color:black; border:1px solid black ;" name="pro_name" placeholder="Enter Product Name">
                </div>
                <div class="col-lg-6">
                    <input type="text" style="color:black;border:1px solid black ;" name="pro_code" placeholder="Enter Product Code">
                </div>
                <div class="col-lg-6">
                    <input type="text" style="color:black;border:1px solid black ;" name="pro_price" placeholder="Enter Product Price">
                </div>
                <div class="col-lg-6">
                    <input type="file" class="input-file uniform_on" name="file" style="border:none;">
                </div>
                <div class="col-lg-6">
                    <input type="file" class="input-file uniform_on" name="file_s" style="border:none;">
                </div>
                <div class="col-lg-6">
                    <input type="file" class="input-file uniform_on" name="file_t" style="border:none;">
                </div>
                <div class="col-lg-6">
                    <input type="text" style="color:black;border:1px solid black ;" name="pro_desc" placeholder="Enter Product Description">
                </div>             
                <div class="col-lg-6">
                    <input type="submit" name="product_submit" value="Submit Product" class="btn btn-primary" style="font-size: 25px; background-color:grey; color:black;">
                </div>
        </form>
    </div>
</div>
</div>
</div>
</center>
<?php

?>
<?php 
include 'footer.php';
?>