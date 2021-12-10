<?php 
include 'header.php';

?>

<div class="container">
    <div class="row">
    <?php 
    $q="SELECT * FROM product";
    $check=mysqli_query($conn,$q);  
    while($row=mysqli_fetch_assoc($check))
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
    ?>  
    </div>
</div>

<?php 
include 'footer.php'
?>