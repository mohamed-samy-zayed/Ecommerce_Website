<?php
// Allowed values
require 'secF.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
        body {
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }
        </style>
        <meta charset="utf-8">
        <title>PORTRAIT</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/popup.css" rel="stylesheet">
        <!-- <link href="css/zoom.css" rel="stylesheet"> -->
    </head>
    <body>
        <!-- Topbar Start -->
        <div class="container-fluid">
            <div class="row bg-secondary py-1 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center h-100">
                        <a class="text-body mr-3" href="">About</a>
                        <a class="text-body mr-3" href="ContactUs/contact_us.php">Contact</a>
                        <a class="text-body mr-3" href="">Help</a>
                        <a class="text-body mr-3" href="">FAQs</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                            <?php
                                if(isset($_SESSION['id']))
                                {
                            ?>
                                <div id="profile_img"></div>
                            <?php
                                }
                            ?>
                            <div class="dropdown-menu dropdown-menu-right">
                                <?php
                                if(isset($_SESSION['id']))
                                {
                                
                                ?>
                                <button class="dropdown-item" type="button" onclick="account()">My Account</button>
                                <button class="dropdown-item" type="button" onclick="chPass()">Change Password</button>
                                <button class="dropdown-item" type="button" onclick="chEmail()">Change Email</button>
                                <button class="dropdown-item" type="button" onclick="logout()">Logout</button>
                                
                                <?php 
                                }
                                else
                                {
                                ?>
                                <button class="dropdown-item" type="button" onclick="singin()">Sign in</button>
                                <button class="dropdown-item" type="button" onclick="singup()">Sign up</button>
                                <?php
                                }
                                ?>
                                <script>
                                    function singin() {
                                        // Redirect to the specified URL
                                        window.location.href = "http://localhost/all/project/ecommerce/login.php";
                                    }
                                    function singup() {
                                        // Redirect to the specified URL
                                        window.location.href = "http://localhost/all/project/ecommerce/signup.php";
                                    }
                                    function logout() {
                                        // Redirect to the specified URL
                                        window.location.href = "http://localhost/all/project/ecommerce/logout.php";
                                    }
                                    function chEmail() {
                                        // Redirect to the specified URL
                                        window.location.href = "http://localhost/all/project/ecommerce/update/changeEmailF.php";
                                    }
                                    function chPass() {
                                        // Redirect to the specified URL
                                        window.location.href = "http://localhost/all/project/ecommerce/update/changePassF.php";
                                    }
                                    function account() {
                                        // Redirect to the specified URL
                                        window.location.href = "http://localhost/all/project/ecommerce/account.php";
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="d-inline-flex align-items-center d-block d-lg-none">
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-heart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-shopping-cart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
                <div class="col-lg-4">
                    <a href="" class="text-decoration-none">
                        <span class="h1 text-uppercase text-primary bg-dark px-2">E</span>
                        <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Commerce</span>
                    </a>
                </div>
                <div class="col-lg-4 col-6 text-left">
                    <form action="search/search.php" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for products" name="search">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-6 text-right">
                    <p class="m-0">Customer Service</p>
                    <h5 class="m-0">+01208596572</h5>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        <!-- Navbar Start -->
        <div class="container-fluid bg-dark mb-30">
            <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                    <a
                        class="btn d-flex align-items-center justify-content-between bg-primary w-100"
                        data-toggle="collapse"
                        href="#navbar-vertical"
                        style="height: 65px; padding: 0 30px;"
                    >
                        <h6 class="text-dark m-0">
                            <i class="fa fa-bars mr-2"></i>
                            Categories
                        </h6>
                        <i class="fa fa-angle-down text-dark"></i>
                    </a>
                    <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                        <div class="navbar-nav w-100">
                            <!-- Start Furniture Drop Down List -->
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color:black;">
                                    Furniture <!-- <span id="ar1">أثاث</span>  --> 
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="furniture/index.php" class="dropdown-item"><strong><span>All Categories Page</span></strong></a>
                                    <a href="#" class="dropdown-item">Chairs</a>
                                    <a href="#" class="dropdown-item">Tables</a>
                                    <a href="furniture/fan" class="dropdown-item">Fan</a>
                                    <a href="#" class="dropdown-item">Window</a>
                                    <a href="furniture/watches/index.php" class="dropdown-item">Alarm Watches</a>
                                    <a href="furniture/spotlight/index.php" class="dropdown-item">Spotlight</a>
                                    <a href="#" class="dropdown-item">Floor Covers</a>
                                    <a href="#" class="dropdown-item">Electric Things</a>
                                </div>
                            </div>
                            <!-- End Furniture Drop Down List -->
                            <!-- Start Dressess Drop Down List -->
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color:black;">
                                    Clothes
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="clothes/index.php" class="dropdown-item"><strong>All Categories Page</strong></a>
                                    <a href="clothes/men/index.php" class="dropdown-item">Men's Dresses</a>
                                    <a href="clothes/women/index.php" class="dropdown-item">Women's Dresses</a>
                                    <a href="clothes/child/index.php" class="dropdown-item">Baby's Dresses</a>
                                </div>
                            </div>
                            <!-- End Dressess Drop Down List -->
                            <!-- <a href="men/menShirts.php" class="nav-item nav-link">Shirts</a> -->
                                <!-- Start Shirts Drop Down List -->
                            <!-- <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <span style="padding-left: 25px;">Shirts</span>
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="clothes/index.php" class="dropdown-item"><strong>All Categories Page</strong></a>
                                    <a href="clothes/men/menShirts.php" class="dropdown-item">Men's Shirts</a>
                                    <a href="clothes/women/womenShirts.php" class="dropdown-item">Women's Shirts</a>
                                    <a href="clothes/child/child_T_Shirts.php" class="dropdown-item">Baby's Shirts</a>
                                </div>
                            </div> -->
                                <!-- End Shirts Drop Down List -->
                            <!-- <a href="men/menJackets.php" class="nav-item nav-link">Jackets</a> -->
                                <!-- Start Jackets Drop Down List -->
                            <!-- <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span style="padding-left: 25px;">Jackets</span>
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="men/menJackets.php" class="dropdown-item">Men's Jackets</a>
                                    <a href="women/womenJackets.php" class="dropdown-item">Women's Jackets</a>
                                    <a href="child/childJackets.php" class="dropdown-item">Baby's Jackets</a>
                                </div>
                            </div> -->
                                <!-- End Jackets Drop Down List -->
                            <!-- <a href="men/menShoes.php" class="nav-item nav-link">Shoes</a> -->
                                <!-- Start Shoes Drop Down List -->
                            <!-- <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <span style="padding-left: 25px;">Shoes</span>
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="men/menShoes.php" class="dropdown-item">Men's Shoes</a>
                                    <a href="women/womenShoes.php" class="dropdown-item">Women's Shoes</a>
                                    <a href="child/childShoes.php" class="dropdown-item">Baby's Shoes</a>
                                </div>
                            </div> -->
                                <!-- End Shoes Drop Down List -->
                            <!-- Start Cosmetics Drop Down List -->
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color:black;">
                                    Cosmetics <!-- <span id="ar2">مستحضرات تجميل</span>  -->
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="#" class="dropdown-item">Men's Cosmetics</a>
                                    <a href="#" class="dropdown-item">Women's Cosmetics</a>
                                    <a href="#" class="dropdown-item">Baby's Cosmetics</a>
                                </div>
                            </div>
                            <!-- End Cosmetics Drop Down List -->
                            <!-- Start Monitors Drop Down List -->
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color:black;">
                                    Computers 
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="computers/index.php" class="dropdown-item"><strong>All Categories Page</strong></a>
                                    <a href="computers/monitors/index.php" class="dropdown-item">Monitors</a>
                                    <a href="computers/laptops/index.php" class="dropdown-item">Laptops</a>
                                    <a href="computers/accessories/index.php" class="dropdown-item">Computers Accessories</a>
                                </div>
                            </div>
                            <!-- End Monitors Drop Down List -->
                            <!-- Start Accessories Drop Down List -->
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color:black;">
                                    Accessories
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="accessories/index.php" class="dropdown-item"><strong>All Accessories</strong></a>
                                    <a href="accessories/men/index.php" class="dropdown-item">Men's Accessories</a>
                                    <a href="accessories/women/index.php" class="dropdown-item">Women's Accessories</a>
                                    <a href="accessories/child/index.php" class="dropdown-item">Baby's Accessories</a>
                                </div>
                            </div>
                            <!-- End Accessories Drop Down List -->
                            <!-- Start Phones Drop Down List -->
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color:black;">
                                    Phones
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="#" class="dropdown-item">Iphone</a>
                                    <a href="#" class="dropdown-item">Samsong</a>
                                    <a href="#" class="dropdown-item">Hawawy</a>
                                    <a href="#" class="dropdown-item">OPPO</a>
                                    <a href="#" class="dropdown-item">Tech</a>
                                </div>
                            </div>
                            <!-- End Phones Drop Down List -->
                        </div>
                    </nav>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                        <a href="" class="text-decoration-none d-block d-lg-none">
                            <span class="h1 text-uppercase text-dark bg-light px-2">POR</span>
                            <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">TRAIT</span>
                        </a>
                        <button
                            type="button"
                            class="navbar-toggler"
                            data-toggle="collapse"
                            data-target="#navbarCollapse"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <a href="shop.php" class="nav-item nav-link">Shop</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                        Pages
                                        <i class="fa fa-angle-down mt-1"></i>
                                    </a>
                                    <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                        <a href="cart.php" class="dropdown-item">Shopping Cart</a>
                                        <a href="checkout.php" class="dropdown-item">Checkout</a>
                                    </div>
                                </div>
                                <a href="ContactUs/contact_us.php" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                                <a href="" class="btn px-0">
                                    <i class="fas fa-heart text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                                </a>
                                <a href="checkAndPay.php" class="btn px-0 ml-3">
                                    <i class="fas fa-shopping-cart text-primary"></i>
                                    <span  id="counter" class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->
        <!-- Breadcrumb Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav class="breadcrumb bg-light mb-30">
                        <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                        <a class="breadcrumb-item text-dark" href="shop.php">Shop</a>
                        <span class="breadcrumb-item active">Shop Detail</span>
                        <!-- HTML: Add the loading indicator -->
                        
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
        <!-- Shop Detail Start -->
        <div class="container-fluid pb-5">
            <div class="row px-xl-5">
                <div class="col-lg-5 mb-30">
                    <div id="product-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner bg-light" id="img_container" >
                            <div id="loadingIndicator" style="display: none; text-align:center">
                                <strong style="color: blue; ">Loading...</strong>    
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                            <i class="fa fa-2x fa-angle-left text-dark"></i>
                        </a>
                        <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                            <i class="fa fa-2x fa-angle-right text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 h-auto mb-30">
                    <div class="h-100 bg-light p-30">
                        <h3 id="product_name"></h3>
                        <div class="d-flex mb-3">
                            <div class="text-primary mr-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star-half-alt"></small>
                                <small class="far fa-star"></small>
                            </div>
                            <small class="pt-1">(99 Reviews)</small>
                        </div>
                        <h3 class="font-weight-semi-bold mb-4" id="product_price" ></h3>
                        <h3  class="font-weight-semi-bold mb-4" ><del id="product_old_price"></del></h3>
                        <div id="info-1-container">
                            
                        </div>
                        <div>
                            <div class="d-flex mb-3" id="choose-size">
                                <div id="Size-Container">
                                    <strong class="text-dark mr-3">Sizes:</strong>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-1" name="size" value="S">
                                        <label class="custom-control-label" for="size-1">S</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-2" name="size" value="M">
                                        <label class="custom-control-label" for="size-2">M</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-3" name="size" value="L">
                                        <label class="custom-control-label" for="size-3">L</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-4" name="size" value="XL">
                                        <label class="custom-control-label" for="size-4">XL</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-5" name="size" value="XXL">
                                        <label class="custom-control-label" for="size-5">XXL</label>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <strong class="text-dark mr-3">Colors:</strong>
                                <div class="color-options">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-1" name="color" value="black">
                                        <label class="custom-control-label" for="color-1">Black</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-2" name="color" value="white">
                                        <label class="custom-control-label" for="color-2">White</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-3" name="color" value="red">
                                        <label class="custom-control-label" for="color-3">Red</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-4" name="color" value="blue">
                                        <label class="custom-control-label" for="color-4">Blue</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-5" name="color" value="green">
                                        <label class="custom-control-label" for="color-5">Green</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-6" name="color" value="The_Same_Color" checked>
                                        <label class="custom-control-label" for="color-6" >The Same Color</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="d-flex align-items-center mb-4 pt-2">
                                <div class="input-group quantity mr-3" style="width: 130px;">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control bg-secondary border-0 text-center" value="1" name="count" id="quantityInput">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if(isset($_SESSION['id']) && isset($_SESSION['username']))
                            {
                            ?>
                                <button type="submit" class="btn btn-primary px-3" onclick="updateLink()">
                                    <i class="fa fa-shopping-cart mr-1"></i>
                                    Add To Cart
                                </button >
                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary px-3" onclick="goToPayment()">
                                    <i class="fa fa-shopping-cart mr-1"></i>
                                    Check & Pay
                                </button>
                            <?php
                            }
                            else
                            {
                            ?>
                                <a href="http://localhost/all/project/ecommerce/login.php" class="btn btn-primary px-3" >
                                    Login To Be Able To Buy Products
                                </a>
                            <?php
                            }
                            ?>
                            <div class="overlay" id="popupOverlay">
                                <div class="popup">
                                    <p id="popupMessage"></p>
                                    <button class="close-btn" onclick="closePopup()">Close</button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex pt-2">
                            <strong class="text-dark mr-2">Share on:</strong>
                            <div class="d-inline-flex">
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row px-xl-5">
                <div class="col">
                    <div class="bg-light p-30">
                        <div class="nav nav-tabs mb-4">
                            <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                            <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-pane-1">
                                <h4 class="mb-3">Product Description</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae deleniti fuga, distinctio ex ab quae earum, dignissimos cupiditate dolore recusandae animi voluptates, esse velit consectetur voluptatum? Voluptate repellat temporibus dignissimos.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi vero asperiores numquam voluptatum voluptas aut iure? Esse quo veritatis, repellat eveniet adipisci eum reiciendis placeat distinctio blanditiis fuga, iusto nihil..</p>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-2">
                                <h4 class="mb-3">Additional Information</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio similique, quia corrupti nesciunt nemo ducimus voluptas, soluta eum debitis hic fugiat harum neque aliquid, vitae enim dolorem laborum quidem delectus!</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0">
                                                Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                            </li>
                                            <li class="list-group-item px-0">
                                                Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                            </li>
                                            <li class="list-group-item px-0">
                                                Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                            </li>
                                            <li class="list-group-item px-0">
                                                Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0">
                                                Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                            </li>
                                            <li class="list-group-item px-0">
                                                Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                            </li>
                                            <li class="list-group-item px-0">
                                                Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                            </li>
                                            <li class="list-group-item px-0">
                                                Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Detail End -->
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
            <div class="row px-xl-5 pt-5">
                <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                    <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque qui, minus inventore totam ratione iusto, ipsum omnis odit natus</p>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt text-primary mr-3"></i>
                        123 Street,Quesna El-menofia
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope text-primary mr-3"></i>
                        yourname@gmail.com
                    </p>
                    <p class="mb-0">
                        <i class="fa fa-phone-alt text-primary mr-3"></i>
                        +01208596572
                    </p>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="index.php">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Home
                                </a>
                                <a class="text-secondary mb-2" href="shop.php">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Our Shop
                                </a>
                                <a class="text-secondary mb-2" href="#">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Shop Detail
                                </a>
                                <a class="text-secondary mb-2" href="#">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Shopping Cart
                                </a>
                                <a class="text-secondary mb-2" href="#">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Checkout
                                </a>
                                <a class="text-secondary" href="ContactUs/contact_us.php">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Contact Us
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Home
                                </a>
                                <a class="text-secondary mb-2" href="#">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Our Shop
                                </a>
                                <a class="text-secondary mb-2" href="#">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Shop Detail
                                </a>
                                <a class="text-secondary mb-2" href="#">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Shopping Cart
                                </a>
                                <a class="text-secondary mb-2" href="#">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Checkout
                                </a>
                                <a class="text-secondary" href="ContactUs/contact_us.php">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    Contact Us
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                            <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your Email Address">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                            <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-square mr-2" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-primary btn-square mr-2" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-primary btn-square mr-2" href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a class="btn btn-primary btn-square" href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
                <div class="col-md-6 px-xl-0">
                    <p class="mb-md-0 text-center text-md-left text-secondary">
                        All Rights Reserved &copy;2023
                    </p>
                </div>
                <div class="col-md-6 px-xl-0 text-center text-md-right">
                    <img class="img-fluid" src="img/payments.png" alt="">
                </div>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <!--Javascript -->
        <script src="js/main.js"></script>
        <script src="js/Cart/fetch_num_of_products.js"></script>
        <script src="js/Details/detailFetchProduct.js"></script>
        <script src="js/Details/AddToCart.js"></script>
        <?php
        if(isset($_SESSION['id']) && $_SESSION['id'] != '')
        {
            echo '<script src="js/profile_img.js"></script>';
        }
        ?>
    </body>
</html>
<?php

?>