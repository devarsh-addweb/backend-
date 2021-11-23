<?php 
// session_start();
// if(!$_SESSION['email'])
// {
//     header('Location:index.php');
// }
include 'conn.php';
$qq=$_SESSION['email'];
  $q="SELECT fullname FROM customer_reg WHERE email='$qq'";
  $result=mysqli_query($conn,$q);
  $row=mysqli_fetch_assoc($result);
  $name=$row['fullname'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="login.php">Sign in</a>
                <a href="admin_dashboard.php">ADMIN</a>

            </div>
            <div class="offcanvas__top__hover">
                <!-- <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul> -->
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <!-- <a href="search.php" class="search-switch"><img src="img/icon/search.png" alt=""></a> -->
            <form method="post" action="search.php">
                                <table>
                                    <tr>
                                        <th>
                                            <input type="text" name="word" style=" background-color:white;">
                                            <input type="submit" name="search" value="Go" style="border:none; background-color:green;">
                                        </th>
                                    </tr>
                                </table>
                            </form>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="cart.php"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p style="color: white; font-size:20px;"> <?php echo strtoupper($name); ?></p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7">
                        <div class="header__top__left">
                            <p style="color: white; font-size:20px;"> <?php echo strtoupper($name); ?></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-7" style="background-color:;">
                        <div class="header__top__left">
                            <form method="post" action="search.php">
                                <table>
                                    <tr>
                                        <th>
                                            <input type="text" name="word" style="border: none; background-color:white; border-radius: 5px;">
                                            <input type="submit" name="search" value="Go" style="border:none; background-color:goldenrod; border-radius: 5px;">
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="login.php">Sign in</a> 
                                <a href="admin_dashboard.php">ADMIN</a>
                            </div>
                            <div class="header__top__hover">
                                <!-- <span>Usd <i class="arrow_carrot-down"></i></span> -->
                                <!-- <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class=""><a href="./index.php">Home</a></li>
                            <li><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="shop-details.php">Shop Details</a></li>
                                    <li><a href="shopping-cart.php">Shopping Cart</a></li>
                                    <li><a href="checkout.php">Check Out</a></li>
                                    <li><a href="blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="search.php" class="search-switch"><!-- <img src="img/icon/search.png" alt=""> --></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="cart.php"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <!-- <div class="price">$0.00</div> -->
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
