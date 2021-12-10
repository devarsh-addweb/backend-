<?php 
include 'conn.php';
include 'header_a.php';

 $female_id=$_GET['female_id'];

 $q=mysqli_query($conn,"SELECT * FROM female WHERE female_id='$female_id'");
 //$result=mysqli_query($conn,$q);
 $row=mysqli_fetch_assoc($q);

?>  


<form method="POST" action="update.php?female_id=<?php echo $female_id; ?>" enctype="multipart/form-data">
    <div class="container mt-5" style="width:40%; ">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="p-2 mb-3" style="border-bottom:1px solid green; width: 100%;">
                    <center>Update Man Product</center>
                </h2>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                            <input type="text" class="form-control"  name="pro_name" value="<?php echo $row['pro_name']; ?>">
                            <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Product Code</label>
                        <input type="text" class="form-control" name="pro_code" value="<?php echo $row['pro_code']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Product Price</label>
                        <input type="text" class="form-control" name="pro_price" value="<?php echo $row['pro_price']; ?>">
                    </div>
                    <div class="row" style="background-color:;">
                      <div class="col-lg-4">
                        <center><?php echo "<img src=".$row['pro_img_f']." height=150 " ?></center>
                      </div>
                      <div class="col-lg-4">
                        <center><?php echo "<img src=".$row['pro_img_s']." height=150 " ?></center>
                      </div>
                      <div class="col-lg-4  ">
                        <center><?php echo "<img src=".$row['pro_img_t']." height=150 " ?></center>
                      </div>
                    </div>
         
                    <div class="row" style="background-color:;">
                      <div class="col-lg-4 p-5">
                        <center><input type="file" name="file"></center>
                      </div>
                      <div class="col-lg-4 p-5">
                        <center><input type="file" name="file_s"></center>
                      </div>
                      <div class="col-lg-4 p-5">
                        <center><input type="file" name="file_t"></center>
                      </div>
                   </div>
                   <br>   
                   <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Product Description</label>
                        <input type="text" class="form-control" name="pro_desc" value="<?php echo $row['pro_description']; ?>">
                  </div>
                  <center>
                    <input type="submit" name="female_update" value="Update Items" class="btn btn-success mb-2" style="width:50%;">
                  </center>
            </div>
        </div>
    </div>
</form>

<?php 
include 'footer.php';
?>