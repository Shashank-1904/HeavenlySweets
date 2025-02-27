<?php
$pageName = "Home";
include('../includes/header.php');
include('../includes/navbar.php');
?>

<?php if (isset($_SESSION['message'])): ?>
            <div class="toast <?php echo $_SESSION['message']['type']; ?>" id="toast">
                <span class="toast-text"><?php echo $_SESSION['message']['text']; ?></span>
                <button class="toast-close" id="closeToast">×</button>
            </div>
            <?php unset($_SESSION['message']); // Clear the session message ?>
        <?php endif;?>
        
<!--contact us section start-->
<section class="contact-us-section position-relative overflow-hidden z-1 pt-80 pb-120">
            <img src="../assets/img/shapes/donut.png" alt="frame circle" class="position-absolute frame z--1 d-none d-sm-block w-10">
            <img src="../assets/img/shapes/roll-2.png" alt="roll" class="position-absolute roll-2 z--1">
            <img src="../assets/img/shapes/candy (1).png" alt="pata" class="position-absolute pata z--1">
            <img src="../assets/img/shapes/cookies.png" alt="garlic" class="position-absolute garlic z--1">
            <img src="../assets/img/shapes/cookies.png" alt="roll" class="position-absolute roll-1 z--1">
            <img src="../assets/img/shapes/leaf.svg" alt="leaf" class="position-absolute leaf z--1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content">
                            <h2 class="mb-2 text-center">Get In Touch</h2>
                            <nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item fw-bold" aria-current="page"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Page</li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Contact Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="contact-box rounded-2 bg-white overflow-hidden mt-8">
                    <div class="row g-4">
                        <div class="col-xl-5">
                            <div class="contact-left-box position-relative overflow-hidden z-1 bg-primary p-6 d-flex flex-column h-100" data-background="../assets/img/shapes/circle-half-fill.png">
                                <img src="../assets/img/shapes/texture-overlay.png" alt="texture" class="position-absolute w-100 h-100 start-0 top-0 z--1">
                                <h3 class="text-white mb-3">Contact Details</h3>
                                <p class="fs-sm text-white"><strong>Shop Address :</strong> Sahas housing society, Garkheda Chh.Sambhajinagar </p>
                                <span class="spacer my-5"></span>
                                <ul class="contact-list">
                                    <li class="d-flex align-items-center gap-3 flex-wrap">
                                        <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </span>
                                        <div class="info">
                                            <span class="fw-medium text-white fs-xs">Emergency Call</span>
                                            <h5 class="mb-0 mt-1 text-white">+91 11111 11111</h5>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center gap-3 flex-wrap mt-3">
                                        <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>
                                        <div class="info">
                                            <span class="fw-medium text-white fs-xs">General Communication</span>
                                            <p class="mb-0 mt-1 text-white fw-medium">heavenlysweets@support.com</p>
                                        </div>
                                    </li>
                                </ul>
                                <!-- <div class="mt-5">
                                    <span class="fw-bold text-white mb-3 d-block">Social Share:</span>
                                    <div class="social-links d-flex align-items-center gap-2">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-discord"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <form class="contact-form ps-5 ps-xl-4 py-6 pe-6" action="../handler/add_contact.php" method="post">
                                <h3 class="mb-6">Need Help? Send Message</h3>
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>First Name</label>
                                            <input type="text" placeholder="Saiful" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>Last Name</label>
                                            <input type="text" placeholder="Talukdar" name="lname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>Email</label>
                                            <input type="email" placeholder="You email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>Phone</label>
                                            <input type="tel" placeholder="Your phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="checkbox-fields d-flex align-items-center gap-3 flex-wrap my-2">
                                            <div class="single-field d-inline-flex align-items-center gap-2">
                                                <div class="theme-checkbox">
                                                    <input type="Radio" id="delivery" name="reason" value="Delivery Problem">
                                                    <span class="checkbox-field"><i class="fas fa-check"></i></span>
                                                </div>
                                                <label for="delivery" class="text-dark fw-semibold">Delivery Problem</label>
                                            </div>
                                            <div class="single-field d-inline-flex align-items-center gap-2">
                                                <div class="theme-checkbox">
                                                    <input type="Radio" id="service" name="reason" value="Customer Service">
                                                    <span class="checkbox-field"><i class="fas fa-check"></i></span>
                                                </div>
                                                <label for="service" class="text-dark fw-semibold">Customer Service</label>
                                            </div>
                                            <div class="single-field d-inline-flex align-items-center gap-2">
                                                <div class="theme-checkbox">
                                                    <input type="Radio" id="others" name="reason" value="Others Service">
                                                    <span class="checkbox-field"><i class="fas fa-check"></i></span>
                                                </div>
                                                <label for="others" class="text-dark fw-semibold">Others Service</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="label-input-field">
                                            <label>Messages</label>
                                            <textarea placeholder="Write your message" rows="6" name="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="messagebtn" class="btn btn-primary btn-md rounded-1 mt-6">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->

<?php
include('../includes/footer.php');
?>