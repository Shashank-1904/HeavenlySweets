<?php
$pageName = "Home";
$totalPrice =0;
$shipping_amount = 4.99;
include('../includes/header.php');
include('../includes/navbar.php');
include('../private/db.php');

if(isset($_SESSION['userid'])){
    $user_id = $_SESSION['userid'];

    // Cart product fetch start
    $query = "select * from product p join productCart pc on pc.product_id = p.product_id where pc.user_id='$user_id'";
    $result = mysqli_query($conn,$query);
    if(!$result){
        echo"Wrong Query";
    }
    $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $count = $result->num_rows;

    foreach($products as $product){
        $totalPrice = $totalPrice + ($product['productqty'] * $product['product_price']);
    }

    // Cart product fetch end

    // fetch address start

    $addQuery = "select * from shippingaddress where user_id = '$user_id'";
    $addresult = mysqli_query($conn,$addQuery);
    if(!$addresult){
        echo"Wrong Query";
    }
    $addresses = mysqli_fetch_all($addresult,MYSQLI_ASSOC);

    // fetch address end

}
else{
    echo "<script> window.location.replace('../Home/index.php'); </script>";
}

?>

<body>

    <!--preloader start-->
    <div id="preloader">
        <img src="../assets/img/preloader.gif" alt="preloader" width="450" class="img-fluid">
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--offcanvas menu start-->
        <div class="offcanvas_menu position-fixed">
            <div class="tt-short-info d-none d-md-none d-lg-none d-xl-block">
                <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
                <a href="#" class="logo-wrapper d-inline-block mb-5"><img src="../assets/img/logo.png" alt="logo" /></a>
                <div class="offcanvas-content">
                    <h4 class="mb-4">About Us</h4>
                    <p>
                        Explain to you how all this mistaken denouncing pleasure and praising pain was born and we will
                        give you
                        a complete account of the system, and expound the actual teachings.
                    </p>
                    <p>
                        Mistaken denouncing pleasure and praising pain was born and we will give you complete account of
                        the
                        system expound.
                    </p>
                    <a href="#" class="btn btn-primary mt-4">About Us</a>
                </div>
                <div class="offcanvas-contact mt-5">
                    <h5 class="mb-20">Contact Info</h5>
                    <address>
                        Chicago 12, Melborne City, USA <br />
                        <a href="tel:+8801682648101">+8801682648101</a> <br />
                        <a href="mailto:info@example.com">info@example.com</a>
                    </address>
                </div>
                <div class="social-contact offcanvas_social mt-4">
                    <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="mobile-menu d-md-block d-lg-block d-xl-none">
                <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
                <a href="#" class="d-inline-block mb-5"><img src="../assets/img/logo.png" alt="logo" /></a>
                <nav class="mobile-menu-wrapper mt-4">
                    <ul>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Home<span class="ms-1 fs-xs float-end"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="index.html">Grocery Store</a></li>
                                <li><a href="index-2.html">Natural Store</a></li>
                                <li><a href="index-3.html">Organic Store</a></li>
                                <li><a href="index-4.html">Halal Meat Store</a></li>
                                <li><a href="index-5.html">Meat Store</a></li>
                                <li><a href="index-6.html">Medicine Store</a></li>
                                <li><a href="index-7.html">Furniture Store</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Products<span class="ms-1 fs-xs float-end"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-grid-2.html">Shop Grid V2</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Blog<span class="ms-1 fs-xs float-end"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-listing.html">Blog List</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Pages<span class="ms-1 fs-xs float-end"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="contact-info mt-8">
                    <h5 class="mb-20">Contact Info</h5>
                    <address>
                        Chicago 12, Melborne City, USA <br />
                        <a href="tel:+8801682648101">+8801682648101</a> <br />
                        <a href="mailto:info@example.com">info@example.com</a>
                    </address>
                    <div class="social-contact">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--offcanvas menu end-->

        <!--breadcrumb section start-->
        <div class="gstore-breadcrumb position-relative z-1 overflow-hidden mt--50">
            <img src="../assets/img/shapes/bg-shape-6.png" alt="bg-shape"
                class="position-absolute start-0 z--1 w-100 bg-shape">
            <img src="../assets/img/shapes/pata-xs.svg" alt="pata" class="position-absolute pata-xs z--1 vector-shape">
            <img src="../assets/img/shapes/onion.png" alt="onion"
                class="position-absolute z--1 onion start-0 top-0 vector-shape">
            <img src="../assets/img/shapes/frame-circle.svg" alt="frame circle"
                class="position-absolute z--1 frame-circle vector-shape">
            <img src="../assets/img/shapes/leaf.svg" alt="leaf" class="position-absolute z--1 leaf vector-shape">
            <img src="../assets/img/shapes/garlic-white.png" alt="garlic"
                class="position-absolute z--1 garlic vector-shape">
            <img src="../assets/img/shapes/roll-1.png" alt="roll" class="position-absolute z--1 roll vector-shape">
            <img src="../assets/img/shapes/roll-2.png" alt="roll" class="position-absolute z--1 roll-2 vector-shape">
            <img src="../assets/img/shapes/pata-xs.svg" alt="roll"
                class="position-absolute z--1 pata-xs-2 vector-shape">
            <img src="../assets/img/shapes/tomato-half.svg" alt="tomato"
                class="position-absolute z--1 tomato-half vector-shape">
            <img src="../assets/img/shapes/tomato-slice.svg" alt="tomato"
                class="position-absolute z--1 tomato-slice vector-shape">
            <img src="../assets/img/shapes/cauliflower.png" alt="tomato"
                class="position-absolute z--1 cauliflower vector-shape">
            <img src="../assets/img/shapes/leaf-gray.png" alt="tomato"
                class="position-absolute z--1 leaf-gray vector-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="mb-2 text-center">Check Out Page</h2>
                            <nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item fw-bold" aria-current="page"><a
                                            href="index.html">Home</a></li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Page</li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Check Out</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb section end-->

        <!--checkout section start-->
        <div class="checkout-section ptb-120">
            <div class="container">
                <form action="../handler/place_order.php" method="post">
                    <div class="row g-4">
                        <div class="col-xl-8">
                            <div class="checkout-steps">
                                <div class="d-flex justify-content-between">
                                    <h4 class="mb-5">Shipment Address</h4>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addAddressModal"
                                        class="fw-semibold"><i class="fas fa-plus me-1"></i> Add Address</a>
                                </div>
                                <div class="row g-4">

                                    <?php
                                    foreach($addresses as $address){

                                    
                                ?>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="tt-address-content">
                                            <input type="radio" class="tt-custom-radio" checked name="shipping_address"
                                                id="tt-radio-1" value="<?= $address['addrid']?>">
                                            <label for="tt-radio-1"
                                                class="tt-address-info bg-white rounded p-4 position-relative">
                                                <strong><?=$address['fname']," ", $address['lname']?></strong>
                                                <address class="fs-sm mb-0">
                                                    <?= $address['aptno']," ",$address['address']?> <br>
                                                    <?= $address['state']," ",$address['zipcode']?>
                                                </address>
                                                <a href="#"
                                                    class="tt-edit-address checkout-radio-link position-absolute">Edit</a>
                                            </label>
                                        </div>
                                    </div>

                                    <?php
                                    }
                                ?>

                                    <!-- <div class="col-lg-6 col-sm-6">
                                    <div class="tt-address-content">
                                        <input type="radio" class="tt-custom-radio" name="tt-radio" id="tt-radio-2">
                                        <label for="tt-radio-2" class="tt-address-info bg-white rounded p-4 position-relative">
                                            <strong>Los Angeles </strong>
                                            <address class="fs-sm mb-0">
                                                76 Ferny Avenue <br>
                                            Oakwood Qld 4670
                                            </address>
                                            <a href="#" class="tt-edit-address checkout-radio-link position-absolute">Edit</a>
                                        </label>
                                    </div>
                                </div> -->
                                </div>


                                <h4 class="mb-5 mt-8">Billing Address</h4>
                                <div class="row g-4">

                                    <?php
                                    foreach($addresses as $address){
                                       
                                ?>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="tt-address-content">
                                            <input type="radio" class="tt-custom-radio" checked name="billing_address"
                                                id="tt-radio-4" value="<?= $address['addrid']?>">
                                            <label for="tt-radio-4"
                                                class="tt-address-info bg-white rounded p-4 position-relative">
                                                <strong><?=$address['fname']," ", $address['lname']?></strong>
                                                <address class="fs-sm mb-0">
                                                    <?= $address['aptno']," ",$address['address']?> <br>
                                                    <?= $address['state']," ",$address['zipcode']?>
                                                </address>
                                                <a href="#"
                                                    class="tt-edit-address checkout-radio-link position-absolute">Edit</a>
                                            </label>
                                        </div>
                                    </div>

                                    <?php
                                    }
                                ?>


                                    <!-- <div class="col-lg-4 col-sm-6">
                                    <div class="tt-address-content">
                                        <input type="radio" class="tt-custom-radio" name="tt-radio-billing" id="tt-radio-4">
                                        <label for="tt-radio-4" class="tt-address-info bg-white rounded p-4 position-relative">
                                            <strong>Los Angeles </strong>
                                            <address class="fs-sm mb-0">
                                                76 Ferny Avenue <br>
                                            Oakwood Qld 4670
                                            </address>
                                            <a href="#" class="tt-edit-address checkout-radio-link position-absolute">Edit</a>
                                        </label>
                                    </div>
                                </div> -->
                                </div>

                                <h4 class="mt-8">Payment Method</h4>
                                <div class="checkout-form mt-4 py-7 px-5 bg-white rounded-2">
                                    <div class="form-title d-flex align-items-center mb-5">
                                        <div class="theme-radio">
                                            <input type="radio" id="shipment" name="payment" value="creditordebit"
                                                checked>
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label class="h6 mb-0 ms-2" for="shipment">Credit Card or Debit Card</label>
                                    </div>
                                    <form>
                                        <div class="row g-4">
                                            <div class="col-sm-12">
                                                <div class="label-input-field mt-0">
                                                    <input type="text" placeholder="****  **** **** 7898">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="label-input-field mt-0">
                                                    <input type="text" placeholder="12 / 24">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="label-input-field mt-0">
                                                    <input type="text" placeholder="****">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="label-input-field mt-0">
                                                    <input type="tel" placeholder="478958">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="label-input-field">
                                                    <label>City</label>
                                                    <input type="text" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="label-input-field">
                                                    <label>State</label>
                                                    <input type="text" placeholder="State">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="label-input-field">
                                                    <label>Zip Code</label>
                                                    <input type="text" placeholder="Dhaka-1230">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 mt-4 flex-wrap">
                                            <div class="checkbox d-flex align-items-center gap-2 me-3">
                                                <div class="theme-checkbox flex-shrink-0">
                                                    <input type="checkbox" id="save-card">
                                                    <span class="checkbox-field"><i
                                                            class="fa-solid fa-check"></i></span>
                                                </div>
                                                <label for="save-card">Save this Credit Card for later use</label>
                                            </div>
                                            <div class="checkbox d-flex align-items-center gap-2">
                                                <div class="theme-checkbox flex-shrink-0">
                                                    <input type="checkbox" id="billing-info">
                                                    <span class="checkbox-field"><i
                                                            class="fa-solid fa-check"></i></span>
                                                </div>
                                                <label for="billing-info">Billing same as Shipping address</label>
                                            </div>
                                        </div>
                                        <div class="mt-6 d-flex">
                                            <button type="submit" class="btn btn-secondary btn-md me-3">Use this
                                                Card</button>
                                            <button type="button"
                                                class="btn btn-outline-secondary border-secondary btn-md">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <div
                                    class="checkout-radio d-flex align-items-center justify-content-between gap-3 bg-white rounded p-4 mt-4">
                                    <div class="radio-left d-inline-flex align-items-center">
                                        <div class="theme-radio">
                                            <input type="radio" id="paypal" name="payment" value="paypal">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="paypal" class="ms-2 h6 mb-0">Paypal</label>
                                    </div>
                                    <div class="radio-right text-end">
                                        <img src="../assets/img/brands/paypal-black.png" alt="paypal" class="img-fluid">
                                    </div>
                                </div>
                                <div
                                    class="checkout-radio d-flex align-items-center justify-content-between gap-3 bg-white rounded p-4 mt-4">
                                    <div class="radio-left d-inline-flex align-items-center">
                                        <div class="theme-radio">
                                            <input type="radio" id="paypal" name="payment" value="COD">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="paypal" class="ms-2 h6 mb-0">Cash on Delivery</label>
                                    </div>
                                </div>
                            </div>


                            <!--add address modal start-->
                            <!-- Modal -->
                            <div class="modal fade" id="addAddressModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                                                aria-label="Close"></button>

                                            <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                                                <h2 class="modal-title fs-5 mb-3">Add New Address</h2>
                                                <div class="row align-items-center g-4 mt-3">
                                                    <form action="../handler/add_address.php" method="post">
                                                        <div class="row g-4">
                                                            <div class="col-sm-6">
                                                                <div class="label-input-field">
                                                                    <label>First Name</label>
                                                                    <input type="text" placeholder="Saiful"
                                                                        name="fname">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="label-input-field">
                                                                    <label>Last Name</label>
                                                                    <input type="text" placeholder="Talukdar"
                                                                        name="lname">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="label-input-field">
                                                                    <label>Street Address</label>
                                                                    <input type="text"
                                                                        placeholder="Mountain View, California, United States"
                                                                        name="address">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="label-input-field">
                                                                    <label>Mobile</label>
                                                                    <input type="tel" placeholder="Phone Number"
                                                                        name="phone">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="label-input-field">
                                                                    <label>Email</label>
                                                                    <input type="email" placeholder="Your Email"
                                                                        name="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="label-input-field">
                                                                    <label>Apt Number</label>
                                                                    <input type="text" placeholder="Apart Number"
                                                                        name="aptnumber">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="label-input-field">
                                                                    <label>State</label>
                                                                    <input type="text" placeholder="Dhaka" name="state">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="label-input-field">
                                                                    <label>Zip Code</label>
                                                                    <input type="text" placeholder="Dhaka-1230"
                                                                        name="zipcode">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-6 d-flex">
                                                            <button type="submit" class="btn btn-secondary btn-md me-3"
                                                                name="addaddressbtn">Use this Address</button>
                                                            <button type="submit"
                                                                class="btn btn-outline-secondary border-secondary btn-md">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--add address modal end-->
                        </div>
                        <div class="col-xl-4">
                            <div class="checkout-sidebar">
                                <div class="sidebar-widget checkout-sidebar py-6 px-4 bg-white rounded-2">
                                    <div class="widget-title d-flex">
                                        <h5 class="mb-0 flex-shrink-0">Order Summery</h5>
                                        <span
                                            class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                    </div>
                                    <table class="sidebar-table w-100 mt-5">
                                        <tr>
                                            <td>Items(<?= $count?>):</td>
                                            <td class="text-end">$<?= $totalPrice?></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping & handling:</td>
                                            <td class="text-end">$<?= $shipping_amount?></td>
                                        </tr>
                                        <!-- <tr>
                                        <td>Before tax:</td>
                                        <td class="text-end">$336,04</td>
                                    </tr> -->
                                    </table>
                                    <span class="sidebar-spacer d-block my-4 opacity-50"></span>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0 fs-md">Tax collected</h6>
                                        <h6 class="mb-0 fs-md">$<?= $totalPrice+ $shipping_amount?></h6>
                                        <input type="hidden" name="total_price" value="<?= $totalPrice+ $shipping_amount?>">
                                    </div>
                                    <button type="submit" name="placeorderbtn" class="btn btn-primary btn-md rounded mt-6 w-100">Place
                                        Order</button>
                                    <p class="mt-3 mb-0 fs-xs">By Placing your order your agree to our company <a
                                            href="#">Privacy-policy</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--checkout section end-->


    </div>

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


<?php
include('../includes/footer.php');
?>