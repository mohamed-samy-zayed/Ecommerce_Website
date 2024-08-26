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
        <link href="css/account.css" rel="stylesheet">
    <style>
        
    </style>
    <!-- <title>User Details</title> -->
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
                            <div id="user_photo"></div>
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
                    <p  class="m-0" >Email</p>
                    <h5 class="m-0" id="email_container"></h5>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        <!-- Navbar Start -->
        <div class="container-fluid bg-dark mb-30">
            <div class="row px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <!--<a
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
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    Dresses
                                    <i class="fa fa-angle-right float-right mt-1"></i>
                                </a>
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                    <a href="men.php" class="dropdown-item">Men's Dresses</a>
                                    <a href="women.php" class="dropdown-item">Women's Dresses</a>
                                    <a href="shop.php" class="dropdown-item">Baby's Dresses</a>
                                </div>
                            </div>
                            <a href="menShirts.php" class="nav-item nav-link">Shirts</a>
                            <a href="menJackets.php" class="nav-item nav-link">Jackets</a>
                            <a href="menShoes.php" class="nav-item nav-link">Shoes</a>
                        </div>
                    </nav> -->
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
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="shop.php" class="nav-item nav-link">Shop</a>
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
                                <a href="ContactUs/contact_us.php" class="nav-item nav-link">Contact</a>
                                <a href="balance.php" class="nav-item nav-link">Balance</a>
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
        
        <p style="font-weight: bold; font-size:large; margin-left: 90px; "><i class="fa fa-angle-right mr-2"></i>Here You Can Chose Your Update Option</p>
        <div id="Details" style="margin-left: 650px;"></div>
    <button onclick="toggleForm()" id="up_photo">Update Profile Photo</button>
    <form action="update/upload.php" method="POST" enctype="multipart/form-data" id="uploadForm">
        <input type="file" name="UploadedFile" id="">
        <input type="submit" value="Upload" name="submit">
    </form>

    <button onclick="redirect('http\://localhost/all/project/ecommerce/update/changePassF.php')" id="up_pass">Update Your Password</button>
    <button onclick="redirect('http\://localhost/all/project/ecommerce/update/changeEmailF.php')" id="up_email">Update Your Email</button>

    <script>
        var form = document.querySelector("#uploadForm");

        function toggleForm() {
            form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'flex' : 'none';
        }

        function redirect(url) {
            window.location.href = url;
        }

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                document.getElementById("email_container").textContent = data.email;
                document.getElementById("user_photo").innerHTML=`<img id="img" src='${data.profile_img_url}' alt='avatar' style="width:50px; height:50px; border-radius: 150px;">`;
                var productContainer = document.getElementById('Details');
                productContainer.innerHTML += `
                    <div style="display: block;">
                    <img id="img" src='${data.profile_img_url}' alt='avatar' style="width:150px; height:150px; border-radius: 150px;"><br>
                        <br>
                        <div id="user_id" >User ID: ${data.id}</div><br>
                        <div id="username" >Username: ${data.name}</div><br>
                        <div id="user_email" >Email: ${data.email}</div><br>
                        <!-- Add other user details as needed -->
                    </div>
                `;
            }
        }
        xhr.open("GET", "http://localhost/all/project/ecommerce/api/v1/account/accountAPI.php", true);
        xhr.withCredentials = true;
        xhr.send();
    </script>
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
                                        <button class="btn btn-primary" onclick="singupFooter()" style="margin-top: 0px;">Sign Up</button>
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
        <!-- Fetch Future And Recent Product -->
        <!-- <script src="js/homeFetchProducts.js"></script> -->
</body>

</html>
