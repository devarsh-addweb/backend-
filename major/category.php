<?php 
include 'header_a.php';
include 'conn.php';
?>
<center>
<div class="col-lg-6 col-md-6 mb-5">
    <div class="contact__form">
        <form action="category.php" enctype="multipart/form-data" method="post">
                <div class="col-lg-6 p-4">
                    <font style="float: ; font-size: 30px; border-bottom: 2px solid orangered;" >Category<br></font>
                </div>
                 <div class="col-lg-6">
                    <input type="text" name="cat_name" placeholder="Enter Cat_id">
                </div>           
                <div class="col-lg-6">
                    <input type="file" class="input-file uniform_on" name="file" style="border:none;">
                </div>
                <div class="col-lg-6">
                    <input type="submit" name="category" value="Select category" class="btn btn-primary" style="font-size: 25px; background-color:grey; color:black;">
                </div>
        </form>
    </div>
</div>
</center>
<?php 
if(isset($_POST['category']))
{
    $name=$_POST['cat_name'];
    $img= "images/" . $_FILES['file']['name'];
    
    echo $q = "INSERT INTO category (cat_name,cat_img) VALUES ('$name','$img')";
    move_uploaded_file($_FILES['file']['tmp_name'],$img);
    $check = mysqli_query($conn,$q);


    if(!$check)
    {
        echo "Not Insert";
    }
    else
    {
        echo "Record Inserted";
    }
}
?>
<?php 
include 'footer.php';
?>