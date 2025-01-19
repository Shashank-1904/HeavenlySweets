<?php
$pageName = "Home";
include('../includes/header.php');
include('../includes/navbar.php');
include('../private/db.php');

$query = "select * from category";
$result = mysqli_query($conn,$query);
if(!$result){
    echo"Wrong Query";
}
$categories = mysqli_fetch_all($result,MYSQLI_ASSOC);

$query = "select * from offer";
$offres = mysqli_query($conn,$query);
if(!$offres){
    echo"Wrong Query";
}
$offer = mysqli_fetch_assoc($offres);

// fetch product start
$proquery = "select * from product";
$proresult = mysqli_query($conn,$proquery);
if(!$proquery){
    echo"Wrong Input";
}
$products = mysqli_fetch_all($proresult,MYSQLI_ASSOC);

// fetch product end

?>
<style>
    .background-banner {
    position: relative;
    overflow: hidden;
    background-size: cover;
    background-position: center;
}

.glass-effect {
    background: rgba(255, 255, 255, 0.1); /* Light transparent white */
    backdrop-filter: blur(3px); /* Apply blur effect */
    -webkit-backdrop-filter: blur(4px); /* For Safari */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.gshop-subtitle, h6, h4, .explore-btn {
    position: relative;
    z-index: 2; /* Ensure text is above the glass effect */
}

.explore-btn {
    text-decoration: none;
    background-color: rgba(255, 255, 255, 0.3); /* Semi-transparent background for button */
    padding: 10px 20px;
    border-radius: 5px;
}

.explore-btn:hover {
    background-color: rgba(255, 255, 255, 0.5);
}
</style>
<!--hero section start-->
<section class="gshop-hero pt-120 bg-white position-relative z-1 overflow-hidden">
    <img src="../assets/img/shapes/candy (1).png" alt="leaf" class="position-absolute leaf-shape z--1 rounded-circle">
    <img src="../assets/img/shapes/cookies.png" alt="mango" class="position-absolute mango z--1"
        data-parallax='{"y": -120}'>
    <img src="../assets/img/shapes/hero-circle-sm.png" alt="circle"
        class="position-absolute hero-circle circle-sm z--1">
    <div class="container">
        <div class="gshop-hero-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide gshop-hero-single">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-8">
                            <div class="hero-left-content">
                                <span class="gshop-subtitle fs-5 text-secondary mb-2 d-block">Purely Sweet, Purely
                                    Organic</span>
                                <h1 class="display-4 mb-3">Freshly <mark class="p-0 bg-transparent text-secondary">Made
                                        Sweets</mark> Online</h1>
                                <p class="mb-7 fs-6">Assertively target market-driven intellectual capital with
                                    worldwide human capital holistic.</p>
                                <div class="hero-btns d-flex align-items-center gap-3 gap-sm-5 flex-wrap">
                                    <a href="./products.php" class="btn btn-secondary">Shop Now<span class="ms-2"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                    <a href="./about.php" class="btn btn-primary">About Us<span class="ms-2"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="hero-right text-center position-relative z-1 mt-8 mt-xl-0">
                                <img src="../assets/img/home1/fruits.png" alt="fruits"
                                    class="img-fluid position-absolute end-0 top-50 hero-img">
                                <img src="../assets/img/shapes/tree.png" alt="tree"
                                    class="img-fluid position-absolute tree z-1">
                                <img src="../assets/img/shapes/orange-1.png" alt="orange"
                                    class="position-absolute orange-1 z-1">
                                <img src="../assets/img/shapes/orange-2.png" alt="orange"
                                    class="position-absolute orange-2 z-1">
                                <img src="../assets/img/shapes/hero-circle-lg.png" alt="circle shape"
                                    class="img-fluid hero-circle">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide gshop-hero-single">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-8">
                            <div class="hero-left-content">
                                <span class="gshop-subtitle fs-5 text-secondary mb-2 d-block">From Nature to Your
                                    Plate</span>
                                <h1 class="display-4 mb-3">Discover the <mark
                                        class="p-0 bg-transparent text-secondary">Authentic Taste of 100%</mark> Organic
                                    Sweets.</h1>
                                <p class="mb-7 fs-6">Assertively target market-driven intellectual capital with
                                    worldwide human capital holistic.</p>
                                <div class="hero-btns d-flex align-items-center gap-3 gap-sm-5 flex-wrap">
                                    <a href="shop-grid.html" class="btn btn-secondary">Shop Now<span class="ms-2"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                    <a href="about.html" class="btn btn-primary">About Us<span class="ms-2"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="hero-right text-center position-relative z-1 mt-8 mt-xl-0">
                                <img src="../assets/img/home1/fruits.png" alt="fruits"
                                    class="img-fluid position-absolute end-0 top-50 hero-img">
                                <img src="../assets/img/shapes/tree.png" alt="tree"
                                    class="img-fluid position-absolute tree z-1">
                                <img src="../assets/img/shapes/orange-1.png" alt="orange"
                                    class="position-absolute orange-1 z-1">
                                <img src="../assets/img/shapes/orange-2.png" alt="orange"
                                    class="position-absolute orange-2 z-1">
                                <img src="../assets/img/shapes/hero-circle-lg.png" alt="circle shape"
                                    class="img-fluid hero-circle">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide gshop-hero-single">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-8">
                            <div class="hero-left-content">
                                <span class="gshop-subtitle fs-5 text-secondary mb-2 d-block">Your Sweet Cravings,
                                    Freshly Crafted and Delivered Online.</span>
                                <h1 class="display-4 mb-3">Freshly <mark class="p-0 bg-transparent text-secondary">Made
                                        Sweets</mark> Online</h1>
                                <p class="mb-7 fs-6">Assertively target market-driven intellectual capital with
                                    worldwide human capital holistic.</p>
                                <div class="hero-btns d-flex align-items-center gap-3 gap-sm-5 flex-wrap">
                                    <a href="shop-grid.html" class="btn btn-secondary">Shop Now<span class="ms-2"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                    <a href="about.html" class="btn btn-primary">About Us<span class="ms-2"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="hero-right text-center position-relative z-1 mt-8 mt-xl-0">
                                <img src="../assets/img/home1/fruits.png" alt="fruits"
                                    class="img-fluid position-absolute end-0 top-50 hero-img">
                                <img src="../assets/img/shapes/tree.png" alt="tree"
                                    class="img-fluid position-absolute tree z-1">
                                <img src="../assets/img/shapes/orange-1.png" alt="orange"
                                    class="position-absolute orange-1 z-1">
                                <img src="../assets/img/shapes/orange-2.png" alt="orange"
                                    class="position-absolute orange-2 z-1">
                                <img src="../assets/img/shapes/hero-circle-lg.png" alt="circle shape"
                                    class="img-fluid hero-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gshop-hero-slider-pagination theme-slider-control position-absolute top-50 translate-middle-y z-5">
    </div>
</section>
<!--hero section end-->

<!--Services section start-->
<section class="gshop-category-section bg-white pt-120 position-relative z-1 overflow-hidden">
    <img src="../assets/img/shapes/bg-shape.png" alt="bg shape" class="position-absolute bottom-0 start-0 w-100 z--1">
    <div class="container">
        <div class="gshop-category-box border-secondary rounded-3 bg-white">
            <div class="text-center section-title">
                <h4 class="d-inline-block px-2 bg-white mb-4">Our Top Services</h4>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div
                        class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden">
                        <div
                            class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                            <img src="../assets/img/category/safe_payment.png" alt="flower" class="img-fluid">
                        </div>
                        <a href="javascript:void(0);" class="text-dark fs-sm fw-bold d-block mt-3">Safe Payment</a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div
                        class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden color-2">
                        <div
                            class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                            <img src="../assets/img/category/packaging.png" alt="flower" class="img-fluid">
                        </div>
                        <a href="javascript:void(0);" class="text-dark fs-sm fw-bold d-block mt-3">Safe Packaging</a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div
                        class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden color-3">
                        <div
                            class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                            <img src="../assets/img/category/value_for_money.png" alt="flower" class="img-fluid">
                        </div>
                        <a href="javascript:void(0);" class="text-dark fs-sm fw-bold d-block mt-3">Value for Money</a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                    <div
                        class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden color-4">
                        <div
                            class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                            <img src="../assets/img/category/preservatives_free.png" alt="flower" class="img-fluid">
                        </div>
                        <a href="javascript:void(0);" class="text-dark fs-sm fw-bold d-block mt-3">Preservative free
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services section end-->

<!--banner section start-->
<section class="banner-section position-relative z-1 overflow-hidden pt-120 pb-200">
    <img src="../assets/img/shapes/bg-shape-4.png" alt="bg shape" class="position-absolute start-0 bottom-0 w-100 z--1">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-7">
                <div class="banner-box background-banner rounded-2 banner-lg"
                    data-background="../assets/img/banner/cta-banner-2.jpg">
                    <span class="badge bg-danger mb-2">Top Offer</span>
                    <h3 class="mb-6 text-dark gshop-title"><?php echo $offer['offersubheading']?><br class="d-none d-sm-block">
                        <mark class="position-relative text-secondary position-relative bg-transparent"><?php echo $offer['offerheading']?><img src="../assets/img/shapes/border-line.png"
                                class="position-absolute start-0 border-line w-100" alt="border line"></mark></h3>
                    <a href="./products.php" class="btn btn-secondary btn-md">Shop Now<span class="ms-2"><i
                                class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="banner-img rounded-3 overflow-hidden">
                    <img src="../common_images/offer/coffee flavoured cookies2.jpg" style="height: 400px;" alt="banner" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner section end-->

<!--Category Section start-->
<section class="featured-products pt-120 pb-200 bg-shade position-relative overflow-hidden z-1">
    <img src="../assets/img/shapes/candy (1).png" alt="roll" class="h-10 position-absolute roll-1 z--1"
        data-parallax='{"y": -120}'>
    <img src="../assets/img/shapes/candies.png" alt="roll" class="w-20 position-absolute roll-2 z--1"
        data-parallax='{"y": 120}'>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center mb-4">
                    <h3 class="mb-2">Categories</h3>
                    <p class="mb-0">At Heavenly Sweets, we offer a wide variety of sweet indulgences, each crafted with care to ensure perfection in every bite.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Card 1 -->
                <?php
                foreach($categories as $category){      
                ?>
                <div class="col-md-6 mb-4">
                    <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4">
                        <div class="thumbnail position-relative rounded-2">
                            <a href="./products.php"><img src="../common_images/category/<?= $category['catimg']?>" alt="product"
                                    class="img-fluid"></a>
                            <div
                                class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i
                                        class="fa-solid fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="card-content mt-4 mt-sm-0">
                            <div class="d-flex align-items-center flex-nowrap star-rating">
                                <ul class="d-flex align-items-center me-2">
                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span class="flex-shrink-0">(5.2k Reviews)</span>
                            </div>
                            <a href="./products.php"
                                class="fw-bold text-heading title d-block"><?= $category['catname']?></a>
                            <div class="pricing mt-2">
                                <span class="fw-bold h4 me-1 text-muted"><?= $category['catdscr']?></span>
                            </div>
                            <a href="./products.php" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop
                                Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <img src="../assets/img/shapes/bg-shape-2.png" alt="bg shape" class="position-absolute start-0 bottom-0 w-100 z--1">
</section>
<!--Category section end-->

<!--trending products start-->
<section class="pt-8 pb-100 bg-white position-relative overflow-hidden z-1 trending-products-area">
    <img src="../assets/img/shapes/garlic.png" alt="garlic" class="position-absolute garlic z--1"
        data-parallax='{"y": 100}'>
    <img src="../assets/img/shapes/carrot.png" alt="carrot" class="position-absolute carrot z--1"
        data-parallax='{"y": -100}'>
    <img src="../assets/img/shapes/mashrom.png" alt="mashrom" class="position-absolute mashrom z--1"
        data-parallax='{"x": 100}'>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5">
                <div class="section-title text-center text-xl-start">
                    <h3 class="mb-0">Top Trending Products</h3>
                </div>
            </div>

        </div>
        <div class="row justify-content-center g-4 mt-5 filter_group">

            <?php
            foreach($products as $product){

            ?>
            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-10 filter_item">
                <div class="vertical-product-card rounded-2 position-relative">
                    <div class="thumbnail position-relative text-center p-4">
                        <a href="./products.php"><img src="../assets/img/products/<?= $product['product_image']?>"
                                alt="apple" class="img-fluid"></a>
                        <div class="product-btns position-absolute d-flex gap-2 flex-column">
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i
                                    class="fa-regular fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="card-content">
                        <a href="shop-grid.html" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Fresh
                            Organic</a>
                        <a href="./products.php"
                            class="card-title fw-bold d-block mb-2"><?=$product['product_name'] ?></a>
                        <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                            <ul class="d-flex align-items-center me-2">
                                <?php
                                    $rating = $product['product_rating'];
                                    for($i = 0; $i < 5 ; $i++){
                                        if($rating >= $i + 0.8){
                                    ?>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <?php
                                        }
                                        elseif($rating >= $i + 0.3){
                                        ?>
                                <li class="text-warning"><i class="fa-solid fa-star-half-alt"></i></li>
                                <?php
                                    }
                                        else{
                                        ?>
                                <li class="text-warning"><i class="far fa-star"></i></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                            <span class="flex-shrink-0">(<?= $product['product_rating']?>)</span>
                        </div>
                        <h6 class="price text-danger mb-3">₹<?= $product['product_price']?></h6>
                        <!-- <div class="card-progressbar mb-2 rounded-pill">
                            <span class="card-progress bg-primary" data-progress="100%"></span>
                        </div>
                        <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">40/100</span></p> -->
                    </div>
                    <div class="card-btn bg-white">
                        <form method="post" action="../handler/add_cart.php">
                            <input type="hidden" name="product_id" value="<?= $product['product_id']?>">
                            <input type="hidden" name="product_price" value="<?= $product['product_price']?>">
                            <input type="hidden" name="product_qty" value="<?= $product['product_qty']?>">
                            <button type="submit" class="btn btn-secondary d-block btn-md rounded-1 w-100" name="addcartbtn">Add to Cart</button>
                        </form>

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
                </div>
            </div>

            <?php
            }
            ?>

        </div>
    </div>
</section>
<!--trending products end-->

<!--banner section start-->
<section class="banner-section position-relative z-1 overflow-hidden bg-white pt-2">
    <img src="../assets/img/shapes/bg-shape-3.png" alt="bg shape" class="position-absolute start-0 bottom-0 z--1 w-100">
    <div class="container">
        <div class="row align-items-center g-4 justify-content-center">
        <div class="col-xl-4 col-md-6">
    <div class="banner-box background-banner rounded-2 overflow-hidden position-relative" 
         data-background="../common_images/category/cat.jpg">
        <div class="glass-effect position-absolute top-0 left-0 w-100 h-100"></div>
        <span class="gshop-subtitle fs-xxs mb-1 text-light d-inline-block">100% Pure Products</span>
        <h6 class="mb-0 text-light">Fresh Fruits</h6>
        <h4 class="mb-6 text-light">Healthy Juice</h4>
        <a href="./products.php" class="explore-btn fw-bold text-light">Shop Now<span class="ms-1"><i
                    class="fas fa-arrow-right"></i></span></a>
    </div>
</div>
            <div class="col-xl-4 col-md-6">
                <div class="banner-box rounded-2 overflow-hidden position-relative banner-color-green z-1">
                    <img src="../assets/img/products/kaju katli.jpg" alt="capsicum" class="banner-img mt-1" >
                    <span class="gshop-subtitle fs-xxs mb-1 text-dark d-inline-block">Weekly Best Seller</span>
                    <h6 class="mb-0">Fresh Fruits</h6>
                    <h4 class="mb-6">Healthy Juice</h4>
                    <a href="./products.php" class="explore-btn fw-bold text-dark">Shop Now<span class="ms-1"><i
                                class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="banner-box rounded-2 overflow-hidden position-relative z-1 banner-color-secondary">
                    <img src="../assets/img/products/rasmali.jpg" alt="lychee" class="banner-img">
                    <span class="badge bg-danger gshop-subtitle mb-1">Top Offer</span>
                    <h6 class="mb-0">Fresh Fruits</h6>
                    <h4 class="mb-6">Healthy Juice</h4>
                    <a href="./products.php" class="explore-btn fw-bold text-dark">Shop Now<span class="ms-1"><i
                                class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner section end-->

<!--feedback section start-->
<section class="ptb-120 bg-shade position-relative overflow-hidden z-1 feedback-section">
    <img src="../assets/img/shapes/bg-shape-5.png" alt="bg shape" class="position-absolute start-0 bottom-0 z--1 w-100">
    <img src="../assets/img/shapes/map-bg.png" alt="map"
        class="position-absolute start-50 top-50 translate-middle z--1">
    <img src="../assets/img/shapes/ladoo.png" alt="shape" class="position-absolute z--1 fd-1 w-20">
    <img src="../assets/img/shapes/cake (2).png" alt="shape" class="position-absolute z--1 fd-2">
    <img src="../assets/img/shapes/candy (1).png" alt="shape" class="position-absolute z--1 fd-3 w-10">
    <img src="../assets/img/shapes/cookies.png" alt="shape" class="position-absolute z--1 fd-4">
    <img src="../assets/img/shapes/ladoo (1).png" alt="shape" class="position-absolute z--1 fd-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center">
                    <h2 class="mb-6">What Our Clients Say</h2>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="gshop-feedback-slider-wrapper">
                    <div class="swiper gshop-feedback-thumb-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide control-thumb">
                                <img src="../assets/img/authors/client-1.png" alt="clients"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="swiper-slide control-thumb">
                                <img src="../assets/img/authors/client-2.png" alt="clients"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="swiper-slide control-thumb">
                                <img src="../assets/img/authors/client-3.png" alt="clients"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="swiper-slide control-thumb">
                                <img src="../assets/img/authors/client-4.png" alt="clients"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="swiper-slide control-thumb">
                                <img src="../assets/img/authors/client-5.png" alt="clients"
                                    class="img-fluid rounded-circle">
                            </div>
                        </div>
                    </div>
                    <div class="swiper gshop-feedback-slider mt-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide feedback-single text-center">
                                <p class="mb-5">“The rasgullas here are a slice of heaven! Each bite melts in your
                                    mouth. I ordered a customized cake for my daughter's birthday, and it was not just
                                    beautiful but also incredibly delicious. This is my go-to place for every
                                    celebration now!” </p>
                                <span class="clients_name text-dark fw-bold d-block mb-1">Ananya Sharma</span>
                                <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="swiper-slide feedback-single text-center">
                                <p class="mb-5">“I tried their kaju katli and gulab jamun, and they were simply perfect!
                                    Fresh, flavorful, and the sweetness level was just right. The staff is very friendly
                                    and accommodating. Highly recommended!” </p>
                                <span class="clients_name text-dark fw-bold d-block mb-1">Ravi Patel</span>
                                <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="swiper-slide feedback-single text-center">
                                <p class="mb-5">“I ordered a butterscotch cake for my parents' anniversary, and it was
                                    beyond my expectations! The presentation was stunning, and the taste was divine.
                                    Everyone at the party loved it!” </p>
                                <span class="clients_name text-dark fw-bold d-block mb-1">Priya Menon</span>
                                <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="swiper-slide feedback-single text-center">
                                <p class="mb-5">“Distinctively unleash business technologies without backend metrics.
                                    Conveniently network distributed core competencies. Continually integrate
                                    backward-compatible information and backward-compatible” </p>
                                <span class="clients_name text-dark fw-bold d-block mb-1">Sneha Nair</span>
                                <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="swiper-slide feedback-single text-center">
                                <p class="mb-5">“Their laddoos and barfis reminded me of my grandmother's recipes.
                                    Authentic flavors, excellent quality, and reasonable prices. It's a hidden gem for
                                    sweet lovers!” </p>
                                <span class="clients_name text-dark fw-bold d-block mb-1">Arjun Gupta</span>
                                <ul class="star-rating fs-sm d-inline-flex align-items-center text-warning">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feedback section end-->

<?php
include('../includes/footer.php');
?>