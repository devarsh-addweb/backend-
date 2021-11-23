<?php 
include 'header.php';
include 'conn.php';
?>

<?php 


?>

<div class="container">
    <div class="row">

    <?php 
    if(isset($_POST['search']))
    {

    $word=$_POST['word'];
	$q="SELECT * FROM female WHERE pro_name LIKE '%$word%' ";
	$result=mysqli_query($conn,$q);
	//$row_female=$_GET['female_id'];
	//$row=mysqli_fetch_assoc($result); 
    while($row1=mysqli_fetch_assoc($result))
    {
       
        ?> 
         <div class="col-3 card" style="background-color:;">
            <a href="shop-details-female.php?female_id=<?php echo $row1['female_id'];  ?>">
                <img src="<?php echo $row1['pro_img_f']; ?>" class="p-2" style="width: 300px; height: 300px;">
            </a>
            <h4><?php echo $row1['pro_name']; ?></h4>
            <span>  </span>
            <h6 class="p-1"><b>₹  <?php echo $row1['pro_price']; ?></b></h6> 
            <div class="rating p-1">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="container p-2">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="female_cart.php?female_id=<?php echo $row1['female_id'];  ?>" class="btn btn-secondary" style="width:50%;">add to cart</a>
                    </div>
                </div>
            </div>
        </div> 
        <?php
    }
}
    ?>  

    </div>
</div>



<div class="container">
    <div class="row">

    <?php 
    if(isset($_POST['search']))
    {

    $word=$_POST['word'];
	$q="SELECT * FROM man WHERE pro_name LIKE '%$word%' ";
	$result=mysqli_query($conn,$q);
	//$row=mysqli_fetch_assoc($result); 
    while($row=mysqli_fetch_assoc($result))
    {
       
        ?> 
         <div class="col-3 card" style="background-color:;">
            <a href="shop-details-man.php?man_id=<?php echo $row['man_id'];  ?>">
                <img src="<?php echo $row['pro_img_f']; ?>" class="p-2" style="width: 300px; height: 300px;">
            </a>
            <h4><?php echo $row['pro_name']; ?></h4>
            <span>  </span>
            <h6 class="p-1"><b>₹  <?php echo $row['pro_price']; ?></b> </h6> 
            <div class="rating p-1">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="container p-2">
                <div class="row">
                    <div class="col-sm-12">
                        <form  method="POST">
                            <a href="man_cart.php?man_id=<?php echo $row['man_id'];  ?>" class="btn btn-secondary">
                                add cart
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        <?php
    }
}
    ?>  

    </div>
</div>


<div class="container">
    <div class="row">

    <?php 
    if(isset($_POST['search']))
    {

    $word=$_POST['word'];
	$q="SELECT * FROM kids WHERE pro_name LIKE '%$word%' ";
	$result=mysqli_query($conn,$q);
	//$row=mysqli_fetch_assoc($result); 
    while($row_kids=mysqli_fetch_assoc($result))
    {
       
        ?> 
         <div class="col-3 card" style="background-color:;">
            <a href="shop-details-kids.php?kids_id=<?php echo $row_kids['kids_id'];  ?>">
                <img src="<?php echo $row_kids['pro_img_f']; ?>" class="p-2" style="width: 300px; height: 300px;">
            </a>
            <h4><?php echo $row_kids['pro_name']; ?></h4>
            <span>  </span>
            <h6 class="p-1"><b>₹  <?php echo $row_kids['pro_price']; ?></b></h6> 
            <div class="rating p-1">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="container p-2">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="kids_cart.php?kids_id=<?php echo $row_kids['kids_id'];  ?>" class="btn btn-secondary" style="width:50%;">add to cart</a>
                    </div>
                </div>
            </div>
        </div> 
        <?php
    }
}
    ?>  

    </div>
</div>


<?php 
include 'footer.php';
?>

 