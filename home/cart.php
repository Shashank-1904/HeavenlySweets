<?php
$pageName = "Home";
$totalprice =0;

include('../includes/header.php');
include('../includes/navbar.php');

include('../private/db.php');
if(isset($_SESSION['userid'])){
    $user_id = $_SESSION['userid'];
    $query = "select * from product p join productCart pc on pc.product_id = p.product_id where pc.user_id='$user_id'";
    $result = mysqli_query($conn,$query);
    if(!$result){
        echo"Wrong Query";
    }
    $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $count = $result->num_rows;
}
else{
    echo "<script> window.location.replace('../Home/index.php'); </script>";
}
// fetch cart product start

// fetch cart product end

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
                            <h2 class="mb-2 text-center">Shopping Cart</h2>
                            <nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item fw-bold" aria-current="page"><a
                                            href="index.html">Home</a></li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Page</li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Cart Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb section end-->

        <!--cart section start-->
        <section class="cart-section ptb-120">
            <div class="container">
                <div class="select-all d-flex align-items-center justify-content-between bg-white rounded p-4">
                    <div class="d-inline-flex gap-2 align-items-center">
                        <div class="theme-checkbox">
                            <input type="checkbox" id="select-all">
                            <span class="checkbox-field"><i class="fa-solid fa-check"></i></span>
                        </div>
                        <label for="select-all">Select All(<?= $count?> ITEMS)</label>
                    </div>
                    <a href="#" class="text-gray"><span class="me-2"><i
                                class="fa-solid fa-trash-can"></i></span>Delete</a>
                </div>
                <div class="rounded-2 overflow-hidden">

                    <form action="../handler/update_cart.php" method="post">
                        <table class="cart-table w-100 mt-4 bg-white">
                            <thead>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Price</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php foreach($products as $product): ?>
                                <tr>
                                    <td>
                                        <img src="../assets/img/products/<?= $product['product_image'] ?>"
                                            alt="product-thumb" class="img-fluid h-1 w-50">
                                    </td>
                                    <td class="text-start product-title">
                                        <h6 class="mb-0"><?= htmlspecialchars($product['product_name']) ?></h6>
                                    </td>
                                    <td>
                                        <div class="product-qty d-inline-flex align-items-center">
                                            <button type="button" class="decrease btn btn-sm btn-outline-secondary"
                                                onclick="adjustQuantity(this, -0.5)">-</button>
                                            <input type="text" class="qty-input text-center mx-2" name="qtyvalue"
                                                value="<?= $product['productqty'] ?>" step="0.5">
                                            <button type="button" class="increase btn btn-sm btn-outline-secondary"
                                                onclick="adjustQuantity(this, 0.5)">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        ₹<span class="unit-price"><?= $product['product_price'] ?></span>
                                    </td>
                                    <td>
                                        ₹<span
                                            class="total-price"><?= $product['productqty'] * $product['product_price'] ?></span>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <input type="hidden" name="product_id"
                                                value="<?= $product['product_id'] ?>">
                                            <button type="submit" name="updatebtn"
                                                class="btn btn-primary btn-md rounded-1">Update</button>
                                            <button type="submit" name="deletebtn"
                                                class="btn btn-danger btn-md rounded-1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </form>

                    <script>
                    function adjustQuantity(button, step) {
                        // Get the input field and other relevant elements
                        const input = button.parentElement.querySelector('.qty-input');
                        const unitPriceElem = button.closest('tr').querySelector('.unit-price');
                        const totalPriceElem = button.closest('tr').querySelector('.total-price');

                        // Parse current values
                        let currentValue = parseFloat(input.value) || 0;
                        const unitPrice = parseFloat(unitPriceElem.textContent) || 0;

                        // Adjust the quantity and ensure it doesn't go below 0
                        currentValue += step;
                        if (currentValue < 0) currentValue = 0;

                        // Update the input field and total price
                        input.value = currentValue.toFixed(1); // Keep one decimal place
                        totalPriceElem.textContent = (currentValue * unitPrice).toFixed(2); // Update total price
                    }
                    </script>

                </div>
                <div class="row g-4 justify-content-end">

                    <div class="col-xl-5 ">
                        <div class="cart-summery bg-white rounded-2 pt-4 pb-6 px-5 mt-4">
                            <table class="w-100">
                                <tr>
                                    <td class="py-3">
                                        <h5 class="mb-0 fw-medium">Subtotal</h5>
                                    </td>
                                    <td class="py-3">
                                        <h5 class="mb-0 fw-semibold text-end">₹<?= $totalprice?></h5>
                                    </td>
                                </tr>
                                <tr class="border-top">
                                    <td class="py-3">
                                        <h5 class="mb-0">Total</h5>
                                    </td>
                                    <td class="text-end py-3">
                                        <h5 class="mb-0">₹<?= $totalprice?></h5>
                                    </td>
                                </tr>
                            </table>
                            <p class="mb-5 mt-2">Shipping options will be updated during checkout.</p>
                            <div class="btns-group d-flex gap-3">
                                <button type="submit" class="btn btn-primary btn-md rounded-1"><a href="checkout.php"
                                        class="btn btn-primary btn-md rounded-1">Confirm Order</a> </button>
                                <button type="button"
                                    class="btn btn-outline-secondary border-secondary btn-md rounded-1">Continue
                                    Shopping</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cart section end-->




        <!--modal box-->

        <div class="modal fade" id="quickview_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                            <div class="row align-items-center g-4">
                                <div class="col-xl-6 align-self-end">
                                    <div class="quickview-double-slider">
                                        <div class="quickview-product-slider swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide text-center">
                                                    <img src="../assets/img/products/p-lg-1.png" alt="jam"
                                                        class="img-fluid">
                                                </div>
                                                <div class="swiper-slide text-center">
                                                    <img src="../assets/img/products/p-lg-2.png" alt="jam"
                                                        class="img-fluid">
                                                </div>
                                                <div class="swiper-slide text-center">
                                                    <img src="../assets/img/products/p-lg-3.png" alt="jam"
                                                        class="img-fluid">
                                                </div>
                                                <div class="swiper-slide text-center">
                                                    <img src="../assets/img/products/p-lg-4.png" alt="jam"
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumbnail-slider swiper mt-80">
                                            <div class="swiper-wrapper">
                                                <div
                                                    class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/img/products/thumb-sm-1.png" alt="jam"
                                                        class="img-fluid">
                                                </div>
                                                <div
                                                    class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/img/products/thumb-sm-2.png" alt="jam"
                                                        class="img-fluid">
                                                </div>
                                                <div
                                                    class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/img/products/thumb-sm-3.png" alt="jam"
                                                        class="img-fluid">
                                                </div>
                                                <div
                                                    class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/img/products/thumb-sm-4.png" alt="jam"
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="product-info">
                                        <h4 class="mt-1 mb-3">Three Carrot Vegetables <br> Peruvian Cuisine</h4>
                                        <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                            <ul class="d-flex align-items-center me-2">
                                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <span class="flex-shrink-0">(5.2k Reviews)</span>
                                        </div>
                                        <div class="pricing mt-2">
                                            <span class="fw-bold fs-xs text-danger">$140.00</span>
                                            <span class="fw-bold fs-xs deleted ms-1">$240.00</span>
                                        </div>
                                        <div class="widget-title d-flex mt-4">
                                            <h6 class="mb-1 flex-shrink-0">Description</h6>
                                            <span
                                                class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                        </div>
                                        <p class="mb-3">Clicks-and-mortar "outside the bethinking. Interactively
                                            disseminate innovative intellectual relationships. </p>
                                        <ul class="d-flex flex-column gap-2">
                                            <li><span class="me-2 text-primary"><i
                                                        class="fa-solid fa-circle-check"></i></span>Natural ingredients
                                            </li>
                                            <li><span class="me-2 text-primary"><i
                                                        class="fa-solid fa-circle-check"></i></span>Tastes better with
                                                milk</li>
                                            <li><span class="me-2 text-primary"><i
                                                        class="fa-solid fa-circle-check"></i></span>Vitamins B2, B3, B5
                                                and B6</li>
                                            <li><span class="me-2 text-primary"><i
                                                        class="fa-solid fa-circle-check"></i></span>Refrigerate for
                                                freshness</li>
                                        </ul>
                                        <h6 class="fs-md mb-2 mt-3">Weight:</h6>
                                        <ul class="product-radio-btn mb-4 d-flex align-items-center gap-2">
                                            <li>
                                                <input type="radio" name="weight" value="250g" checked>
                                                <label>150g</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="weight" value="250g">
                                                <label>500g</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="weight" value="250g">
                                                <label>1kg</label>
                                            </li>
                                        </ul>
                                        <div class="d-flex align-items-center gap-4 flex-wrap">
                                            <div class="product-qty d-flex align-items-center">
                                                <button class="decrese">-</button>
                                                <input type="text" value="01">
                                                <button class="increase">+</button>
                                            </div>
                                            <a href="#" class="btn btn-secondary btn-md"><span class="me-2"><i
                                                        class="fa-solid fa-cart-plus"></i></span>Add to Cart</a>
                                        </div>
                                        <div class="categories mt-4">
                                            <a href="#" class="btn btn-outline btn-sm">Vegetable</a>
                                            <a href="#" class="btn btn-outline btn-sm">Healthy</a>
                                            <a href="#" class="btn btn-outline btn-sm">Organic</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--modal box end-->

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