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

        <?php if (isset($_SESSION['message'])): ?>
            <div class="toast <?php echo $_SESSION['message']['type']; ?>" id="toast">
                <span class="toast-text"><?php echo $_SESSION['message']['text']; ?></span>
                <button class="toast-close" id="closeToast">×</button>
            </div>
            <?php //unset($_SESSION['message']); // Clear the session message ?>
        <?php endif;?>
        <!--login section start-->
        <section class="login-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-12 tt-login-img" data-background="../assets/img/banner/banner-2.jpg"></div>
                    <div class="col-lg-5 col-12 bg-white d-flex p-0 tt-login-col shadow">
                        <form class="tt-login-form-wrap p-3 p-md-6 p-lg-6 py-7 w-100" method="POST" action="./../handler/login_handle.php">
                            <div class="mb-3">
                                <a href="index.html">
                                <img src="../assets/img/hslogo.png" alt="logo" style="height: 70px;" class="img-fluid">
                                </a>
                            </div>
                            <h2 class="mb-4 h3">Hey there! <br>Welcome back <span class="text-secondary">Heavenly Sweets.</span>
                            </h2>
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <div class="input-field">
                                        <label class="fw-bold text-dark fs-sm mb-1">Email</label>
                                        <input type="email" name="uemail" placeholder="Enter your email" class="theme-input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
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
                            </div>
                            <div class="row g-4 mt-4">
                                <div class="col-sm-6">
                                    <button type="submit" name="logbtn" class="btn btn-primary w-100">Sign In</button>
                                </div>
                            </div>
                            <p class="mb-0 fs-xs mt-4">Don't have an Account? <a href="./register.php">Sign Up</a>
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