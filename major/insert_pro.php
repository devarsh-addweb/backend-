<?php 

include 'header_a.php';

 // $q="SELECT * FROM category";
 // $result=mysqli_query($conn,$q);
 // $row=mysqli_fetch_assoc($result);

?>

<center>
<div class="col-lg-6 col-md-6 mb-5">
    <div class="container">
    <div class="row">
       
    <div class="col-12" style="background-color: ;">
    <div class="contact__form">
        <form method="POST" action="insert.php" enctype="multipart/form-data">
                <div class="col-lg-6 p-4">
                    <font style="float: ; font-size: 30px; border-bottom: 2px solid orangered; font-size: 30px;" >Category<br></font>
                </div>
                <div class="row">
                    <div class="col-4" >
                        <div class="col-lg-6">
                            <input type="radio" value="man" name="radio" style="color:black; border:1px solid black ;" name="pro_name" placeholder="Enter Category">
                            <i class="fa fa-male fa-lg mb-5" aria-hidden="true"><br>Male</i>

                        </div>  
                    </div>
                    <div class="col-4" >
                        <div class="col-lg-6">
                            <input type="radio" value="female" name="radio" style="color:black; border:1px solid black ;" name="pro_name" placeholder="Enter Category">
                        </div> 
                        <i class="fa fa-female fa-lg mb-5" aria-hidden="true"><br>Women</i> 
                    </div>
                    <div class="col-4" >
                        <div class="col-lg-6">
                            <input type="radio" value="kids" name="radio" style="color:black; border:1px solid black ;" name="pro_name" placeholder="Enter Category">
                            <i class="fa fa-child fa-lg mb-5" aria-hidden="true"><br>Kids</i>
                        </div>  
                    </div>
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
                <!-- <div class="col-lg-6">
                    <input type="text" style="color:black;border:1px solid black ;" name="pro_desc" placeholder="Enter Product Description">
                </div> -->
                <div class="col-lg-6">
                    <textarea name="pro_desc" placeholder="Enter Product Description" style="color:black;border:1px solid black ;"></textarea>
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