<?php
session_start();

if (isset($_SESSION['useremail'])) {
    echo "<script> window.location.replace('../home/index.php'); </script>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta-->
    <meta name="description" content="Grostore Grocery  eCommerce html template. Multivendor responsive eCommerce template">
    <meta name="author" content="ThemeTags">
    <meta name="keywords" content="Grostore Grocery  ecommerce, admin template, online shop, e-commerce, ecommerce template, marketplace, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <!--favicon icon-->
    <link rel="icon" href="../assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Grostore - Signup - Grostore Grocery eCommerce HTML Template</title>

    <!--build:css-->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- endbuild -->
</head>

<body>
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--login section start-->
        <section class="login-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-12 tt-login-img" data-background="../assets/img/banner/banner-2.jpg"></div>
                    <div class="col-lg-5 col-12 bg-white d-flex p-0 tt-login-col shadow">
                        <form class="tt-login-form-wrap p-3 p-md-6 p-lg-6 py-7 w-100" method="POST" action="./../handler/register_handle.php">
                        <div>
                                <a href="index.html">
                                <img src="../assets/img/hslogo.png" alt="logo" style="height: 70px;" class="img-fluid">
                                </a>
                            </div>
                            <h2 class="mb-4 h3"><br>Welcome to <span class="text-secondary">Heavenly Sweets.</span>
                            </h2>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-bold text-dark fs-sm mb-1">First Name</label>
                                        <input type="text" name="ufname" placeholder="Enter First Name" class="theme-input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-bold text-dark fs-sm mb-1">Last Name</label>
                                        <input type="text" name="ulname" placeholder="Enter Last Name" class="theme-input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-bold text-dark fs-sm mb-1">Email</label>
                                        <input type="email" name="uemail" placeholder="Enter your email" class="theme-input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-bold text-dark fs-sm mb-1">Phone</label>
                                        <input type="number" name="uphone" placeholder="Enter Contact no." class="theme-input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field check-password">
                                        <label class="fw-bold text-dark fs-sm mb-1">Password</label>
                                        <div class="check-password">
                                            <input type="password" placeholder="Password" name="upass" class="theme-input">
                                            <span class="eye eye-icon">
                                                <i class="fa-solid fa-eye"></i>
                                            </span>
                                            <span class="eye eye-slash">
                                                <i class="fa-solid fa-eye-slash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field check-password">
                                        <label class="fw-bold text-dark fs-sm mb-1">Confirm Password</label>
                                        <div class="check-password">
                                            <input type="password" placeholder="Confirm Password" name="ucnfpass" class="theme-input">
                                            <span class="eye eye-icon">
                                                <i class="fa-solid fa-eye"></i>
                                            </span>
                                            <span class="eye eye-slash">
                                                <i class="fa-solid fa-eye-slash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 mt-4">
                                <div class="col-sm-6">
                                    <button type="submit" name="regbtn" class="btn btn-primary w-100">Sign Up</button>
                                </div>

                                <?php
                                if (isset($_SESSION['message'])) {
                                    // Retrieve the message and type
                                    $messageType = $_SESSION['message']['type']; // 'success' or 'error'
                                    $messageText = $_SESSION['message']['text'];
                                
                                    // Display the alert
                                    echo "<script>
                                        alert('$messageText');
                                    </script>";
                                
                                    // Unset the session message to prevent repeated alerts
                                    unset($_SESSION['message']);
                                }
                                ?>
                            </div>
                            <p class="mb-0 fs-xs mt-4">Already have an Account? <a href="./login.php">Sign In</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--login section end-->

    </div>
    <!--main content wrapper end-->


    <!--scroll bottom to top button start-->
    <button class="scroll-top-btn">
        <i class="fa-regular fa-hand-pointer"></i>
    </button>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="../assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/vendors/jquery-ui.min.js"></script>
    <script src="../assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="../assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/vendors/simplebar.min.js"></script>
    <script src="../assets/js/vendors/parallax-scroll.js"></script>
    <script src="../assets/js/vendors/isotop.pkgd.min.js"></script>
    <script src="../assets/js/vendors/countdown.min.js"></script>
    <script src="../assets/js/vendors/range-slider.js"></script>
    <script src="../assets/js/vendors/waypoints.js"></script>
    <script src="../assets/js/vendors/counterup.min.js"></script>
    <script src="../assets/js/vendors/typer.js"></script>
    <script src="../assets/js/app.js"></script>
    <!--endbuild-->
</body>

</html>