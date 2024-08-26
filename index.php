<?php
/* require 'secF.php'; */
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
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
        <link href="css/droplist.css" rel="stylesheet">
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
                        <a href="checkAndPay.php" class="btn px-0 ml-2">
                            <i class="fas fa-shopping-cart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
                <div class="col-lg-4">
                    <a href="" class="text-decoration-none">
                        <span class="h1 text-uppercase text-primary bg-dark px-2">Por</span>
                        <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Trait</span>
                        <!-- <span class="h1 text-uppercase text-primary bg-dark px-2">E</span>
                        <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Commerce</span> -->
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
                                    <a href="furniture/" class="dropdown-item"><strong><span>All Categories Page</span></strong></a>
                                    <a href="furniture/chairs/" class="dropdown-item">Chairs</a>
                                    <a href="furniture/tables/" class="dropdown-item">Tables</a>
                                    <a href="furniture/fan" class="dropdown-item">Fan</a>
                                    <a href="furniture/watches/" class="dropdown-item">Alarm Watches</a>
                                    <a href="furniture/spotlight/" class="dropdown-item">Spotlight</a>
                                    <a href="furniture/carpets/" class="dropdown-item">Carpets</a>
                                    <a href="furniture/electric/" class="dropdown-item">Electric Things</a>
                                </div>
                            </div>
                            <!-- End Furniture Drop Down List -->
                            <!-- Start Clothes Drop Down List -->
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color:black;">
                                    Clothes
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="clothes/" class="dropdown-item"><strong>All Categories Page</strong></a>
                                    <a href="clothes/men/" class="dropdown-item">Men's Dresses</a>
                                    <a href="clothes/women/" class="dropdown-item">Women's Dresses</a>
                                    <a href="clothes/child/" class="dropdown-item">Baby's Dresses</a>
                                </div>
                            </div>
                            <!-- End Clothes Drop Down List -->
                            <!-- Start Accessories Drop Down List -->
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color:black;">
                                    Accessories
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="accessories/" class="dropdown-item"><strong>All Accessories</strong></a>
                                    <a href="accessories/men/" class="dropdown-item">Men's Accessories</a>
                                    <a href="accessories/women/" class="dropdown-item">Women's Accessories</a>
                                    <a href="accessories/child/" class="dropdown-item">Baby's Accessories</a>
                                </div>
                            </div>
                            <!-- End Accessories Drop Down List -->
                            <!-- <a href="men/menShirts.php" class="nav-item nav-link">Shirts</a> -->
                                <!-- Start Shirts Drop Down List -->
                            <!-- <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <span style="padding-left: 25px;">Shirts</span>
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="clothes/" class="dropdown-item"><strong>All Categories Page</strong></a>
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
                            <!-- Start Camera Drop Down List -->
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color:black;">
                                    Camera <!-- <span id="ar2">مستحضرات تجميل</span>  -->
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="camera/" class="dropdown-item"><strong>Go To Shop Page</strong></a>
                                </div>
                            </div>
                            <!-- End Camera Drop Down List -->
                            <!-- Start Monitors Drop Down List -->
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color:black;">
                                    Computers 
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="computers/" class="dropdown-item"><strong>All Categories Page</strong></a>
                                    <a href="computers/monitors/" class="dropdown-item">Monitors</a>
                                    <a href="computers/laptops/" class="dropdown-item">Laptops</a>
                                    <a href="computers/accessories/" class="dropdown-item">Computers Accessories</a>
                                </div>
                            </div>
                            <!-- End Monitors Drop Down List -->
                            
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
                                <a href="" class="nav-item nav-link active">Home</a>
                                <a href="shop.php" class="nav-item nav-link">Shop</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                        Pages
                                        <i class="fa fa-angle-down mt-1"></i>
                                    </a>
                                    <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                        <a href="checkAndPay.php" class="dropdown-item">Shopping Cart</a>
                                        <a href="checkAndPay.php" class="dropdown-item">Checkout</a>
                                    </div>
                                </div>
                                <a href="ContactUs/contact_us.php" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                                <a href="" class="btn px-0">
                                    <i class="fas fa-heart text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                                </a>
                                <a href="checkAndPay.php" class="btn px-0 ml-3" >
                                    <i class="fas fa-shopping-cart text-primary"></i>
                                    <span id="counter" class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->
        <!-- Carousel Start -->
        <div class="container-fluid mb-3">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#header-carousel" data-slide-to="1"></li>
                            <li data-target="#header-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item position-relative active" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                        <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women Fashion</h1>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                        <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative" style="height: 430px;">
                                <!-- <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;"> -->
                                <img class="position-absolute w-100 h-100" src="img/kids-fashion-accessories-2013.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Kids Fashion</h1>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                        <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-offer mb-30" style="height: 200px;">
                        <img class="img-fluid" src="img/offer-1.jpg" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Special Offer Soon</h3>
                            <a href="" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="product-offer mb-30" style="height: 200px;">
                        <img class="img-fluid" src="img/offer-2.jpg" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Special Offer Soon</h3>
                            <a href="" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        <!-- Featured Start -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                        <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured End -->
        <!-- Categories Start -->
        <div class="container-fluid pt-5">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="bg-secondary pr-3">Categories</span>
            </h2>
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="clothes/">
                        <div class="cat-item d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/clothes-cat.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Clothes</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="camera/">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Camera</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="clothes/">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Shoeses</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="cosmetics/">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/cat-4.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Cosmetics</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="furniture/">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/furniture-cat.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Furniture</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="furniture/electric/">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/electric-cat.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Electric Things</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="accessories/">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/accessories-cat.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Accessories</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="computers/">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/computers-cat.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Computers</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="#">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/toy-cat.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Toys</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="accessories/">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/watches-cat.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Watches</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="furniture/chairs/">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/chairs-cat.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Chairs</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>Category Name</h6>
                                <small class="text-body">100 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Categories End -->
        <!-- Products Start ---------------------------------------------------->
        <div class="container-fluid pt-5 pb-3">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="bg-secondary pr-3">Featured Products</span>
            </h2>
            <div class="row px-xl-5" id="FeaturedproductContainer">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/camera/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=camera&kind=camera">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=camera&kind=camera">Camera</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shirts/3/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=3&category=shirts&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=3&category=shirts&kind=men">Shirt</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/accessories/men/watches/smart/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=63&category=men_watches&kind=accessories&type=smart">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=63&category=men_watches&kind=accessories&type=smart">Smart Watch</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/chairs/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=chairs&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=chairs&kind=furniture">Chair</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/cosmetics/shampo/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=shampo&kind=cosmetics">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=shampo&kind=cosmetics">Shampo</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=table_spotlight&kind=furniture">Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/jackets/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=jackets&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=jackets&kind=men">Jacket Bumb</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/2/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=2&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=2&category=table_spotlight&kind=furniture">Table Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/accessories/men/glasses/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=men_glasses&kind=accessories">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=men_glasses&kind=accessories">Premium Glass</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/4/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=4&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=4&category=table_spotlight&kind=furniture">Table Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/2/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=2&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=2&category=table_spotlight&kind=furniture">Table Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/watches/alarm/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=alarm_watch&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=alarm_watch&kind=furniture">Alarm Watches</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/chairs/2/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=2&category=chairs&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=2&category=chairs&kind=furniture">Chair</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/carpets/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=carpets&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=carpets&kind=furniture">Carpet</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shoes/27/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=27&category=shoes&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=27&category=shoes&kind=men">Shoes For Men</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/tables/10/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=10&category=table&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=10&category=tables&kind=furniture">Table</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/fan/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=fan&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=fan&kind=furniture">Fan</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shoes/24/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=24&category=shoes&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=24&category=shoes&kind=men">Shoes For Men</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=table_spotlight&kind=furniture">Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/jackets/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=jackets&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=jackets&kind=men">Jacket Bumb</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/2/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=2&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=2&category=table_spotlight&kind=furniture">Table Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/pants/2/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=2&category=pants&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=2&category=pants&kind=men">Pant</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shirts/5/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=5&category=shirts&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=5&category=shirts&kind=men">Shirt</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shoes/5/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=5&category=shoes&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=5&category=shoes&kind=men">    Shoes For Men</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Products End ------------------------------------------------------>
        <!-- Offer Start -->
        <div class="container-fluid pt-5 pb-3">
            <div class="row px-xl-5">
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="height: 300px;">
                        <img class="img-fluid" src="img/offer-1.jpg" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Special Offer</h3>
                            <a href="" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="height: 300px;">
                        <img class="img-fluid" src="img/offer-2.jpg" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Special Offer</h3>
                            <a href="" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->
        <!-- Products Start -->
        <div class="container-fluid pt-5 pb-3">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="bg-secondary pr-3">Recent Products</span>
            </h2>
            <div class="row px-xl-5" id="RecentproductContainer">
                
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/watches/table/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=table_watch&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=table_watch&kind=furniture">Table Watches</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/pants/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=pants&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=pants&kind=men">Pant</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/accessories/men/glasses/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=men_glasses&kind=accessories">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=men_glasses&kind=accessories">Premium Glass</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/accessories/men/watches/smart/3/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=65&category=men_watches&kind=accessories&type=smart">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=65&category=men_watches&kind=accessories&type=smart">Smart Watch</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/18/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=18&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=18&category=table_spotlight&kind=furniture">Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/watches/wall/4/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=4&category=wall_watch&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=4&category=wall_watch&kind=furniture">Wall Watches</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shoes/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=shoes&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=shoes&kind=men">Shoes</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/4/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=4&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=4&category=table_spotlight&kind=furniture">Table Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/2/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=2&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=2&category=table_spotlight&kind=furniture">Table Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/watches/alarm/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=alarm_watch&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=alarm_watch&kind=furniture">Alarm Watches</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/chairs/2/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=2&category=chairs&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=2&category=chairs&kind=furniture">Chair</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/carpets/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=carpets&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=carpets&kind=furniture">Carpet</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shoes/27/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=27&category=shoes&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=27&category=shoes&kind=men">Shoes For Men</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/tables/10/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=10&category=table&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=10&category=tables&kind=furniture">Table</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/fan/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=fan&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=fan&kind=furniture">Fan</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shoes/24/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=24&category=shoes&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=24&category=shoes&kind=men">Shoes For Men</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=table_spotlight&kind=furniture">Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/jackets/1/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=1&category=jackets&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=1&category=jackets&kind=men">Jacket Bumb</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/furniture/spotlight/table/2/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=2&category=table_spotlight&kind=furniture">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=2&category=table_spotlight&kind=furniture">Table Spotlight</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/pants/2/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=2&category=pants&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=2&category=pants&kind=men">Pant</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shoes/6/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=6&category=shoes&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=6&category=shoes&kind=men">    Shoes For Men</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shirts/5/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=5&category=shirts&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=5&category=shirts&kind=men">Shirt</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shirts/6/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=6&category=shirts&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=6&category=shirts&kind=men">Shirt</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/clothes/men/shoes/5/1.jpg" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="detail.php?id=5&category=shoes&kind=men">
                                    <i class="fa fa-sync-alt"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="detail.php?id=5&category=shoes&kind=men">    Shoes For Men</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5 style="color: green;">179.99</h5>
                                <h6 class="text-muted ml-2">
                                    <del style="color: red; opacity:.7" >215</del>
                                </h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>(99)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products End -->
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
                                        <button class="btn btn-primary" onclick="singupFooter()">Sign Up</button>
                                        <script>
                                            function singupFooter()
                                            {
                                            }
                                        </script>
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
        <!--  Javascript -->
        <script src="js/main.js"></script>
        <script src="js/Cart/fetch_num_of_products.js"></script>
        <!-- Fetch Future And Recent Product -->
        <!-- <script src="js/homeFetchProducts.js"></script> -->
        <?php
        if(isset($_SESSION['id']) && $_SESSION['id'] != '')
        {
            echo '<script src="js/profile_img.js"></script>';
        }
        ?>
    </body>
</html>

<?php
/* }
else
{
    header("Location: login.php?error=Please+Login+First");
} */
?>