<?php
require '../../secF.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E-Commerce</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- Favicon -->
        <link href="../../img/favicon.ico" rel="icon">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="../../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="../../css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Topbar Start -->
        <div class="container-fluid">
            <div class="row bg-secondary py-1 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center h-100">
                        <a class="text-body mr-3" href="">About</a>
                        <a class="text-body mr-3" href="../../ContactUs/contact_us.php">Contact</a>
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
                                        window.location.href = "http://localhost/all/project/ecommerce/loginF.php";
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
                    <form action="../../../search/search.php" method="GET">
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
                            <span class="h1 text-uppercase text-dark bg-light px-2">E</span>
                            <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Commerce</span>
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
                                <a href="../../index.php" class="nav-item nav-link">Home</a>
                                <a href="../../shop.php" class="nav-item nav-link active">Shop</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                        Pages
                                        <i class="fa fa-angle-down mt-1"></i>
                                    </a>
                                    <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                        <a href="" class="dropdown-item">Shopping Cart</a>
                                        <a href="" class="dropdown-item">Checkout</a>
                                    </div>
                                </div>
                                <a href="../../ContactUs/contact_us.php" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                                <a href="" class="btn px-0">
                                    <i class="fas fa-heart text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                                </a>
                                <a href="" class="btn px-0 ml-3">
                                    <i class="fas fa-shopping-cart text-primary"></i>
                                    <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
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
                        <a class="breadcrumb-item text-dark" href="../../index.php">Home</a>
                        <a class="breadcrumb-item text-dark" href="../../shop.php">Shop</a>
                        <span class="breadcrumb-item active">Shop List</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
        <!-- Shop Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <!-- Shop Sidebar Start -->
                <div class="col-lg-3 col-md-4">
                    <!-- Price Start -->
                    <h5 class="section-title position-relative text-uppercase mb-3">
                        <span class="bg-secondary pr-3">Categories</span>
                    </h5>
                    <div class="bg-light p-4 mb-30">
                    <i class="fa fa-angle-right mr-2"></i>
                    <a class="h6 text-decoration-none text-truncate" href="men/index.php">Watches</a>
                    </div>
                    <div class="bg-light p-4 mb-30">
                    <i class="fa fa-angle-right mr-2"></i>
                    <a class="h6 text-decoration-none text-truncate" href="glasses/index.php">Glasses</a>
                    </div>
                    <div class="bg-light p-4 mb-30">
                    <i class="fa fa-angle-right mr-2"></i>
                    <a class="h6 text-decoration-none text-truncate" href="hand_bag/index.php">Hand Bag</a>
                    </div>
                    <!-- Price End -->
                </div>
                <!-- Shop Sidebar End -->
                <div class="col-lg-9 col-md-8" >
                    <div class="row pb-3" id=productsContainer>
                        <!-- Pages Links Start -->
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="../../img/accessories/women/watches/classic/1/1.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href="watches/index.php">
                                            View
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="watches/index.php">Watches</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="../../img/accessories/women/glasses/1/1.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href="glasses/index.php">
                                            View
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="glasses/index.php">Glasses</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="../../img/accessories/women/hand_bag/1/1.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href="hand_bag/index.php">
                                            View
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="hand_bag/index.php">Hand Bag</a>
                                </div>
                            </div>
                        </div>
                        <!-- Pages Links Endes -->
                    </div>
                    <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">
                                            Previous
                                        </span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                </div>
                
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
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
                            <a class="text-secondary mb-2" href="../../detail.php">
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
                            <a class="text-secondary" href="../../ContactUs/contact_us.php">
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
                            <a class="text-secondary" href="../../ContactUs/contact_us.php">
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
                <img class="img-fluid" src="../../img/payments.png" alt="">
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
    <!-- <script src="js/jacketsProducts.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script>
        
    </script>
    <!--  Javascript -->
    <script src="../../js/main.js"></script>
    <?php
        if(isset($_SESSION['id']) && $_SESSION['id'] != '')
        {
            echo '<script src="../../js/profile_img.js"></script>';
        }
    ?>
</body>
</html>
<?php

?>