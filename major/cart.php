<?php 
include 'header.php';
include 'conn.php';
$id=$_GET['cart_id'];
$q="SELECT * FROM cart";
$check=mysqli_query($conn,$q);
?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row" style="background-color:;">
                <div class="col-lg-12" style="background-color:;">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><font style="Color:red;">Action</font></th>
                                </tr>
                            </thead>
                            <?php 
                            while($row=mysqli_fetch_assoc($check))
                            {
                                ?>
                            <tbody>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <a href="#"><img src="<?php echo $row['pro_img_f']; ?>" alt="" style="width: 100px; height:100px;"></a>
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $row['pro_name']; ?></h6>
                                            <h5>₹ <?php echo $row['pro_price']; ?>.00</h5>
                                            <h6><br>    Code</h6><?php echo $row['pro_code']; ?>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price"><?php echo $row['pro_price']; ?>.00</td>
                                    <td class="cart__close"><a class="hvr"
                                     href="delete_cart.php?cart_id=<?php echo $row['cart_id']; ?>" style="background-color: palevioletred; color: white; font-size: 20px; padding: 5px;">Remove<!-- <i class="fa fa-close"></i> --></a></td>
                                </tr>
                            </tbody>
                                <?php 
                                }
                                ?>
                        </table>
                    </div>



                                
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ 169.50</span></li>
                            <li>Total <span>$ 169.50</span></li>
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
<?php 
include 'footer.php';
?>