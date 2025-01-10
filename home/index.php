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

// fetch product start
$proquery = "select * from product";
$proresult = mysqli_query($conn,$proquery);
if(!$proquery){
    echo"Wrong Input";
}
$products = mysqli_fetch_all($proresult,MYSQLI_ASSOC);

// fetch product end

?>
<!--hero section start-->
<section class="gshop-hero pt-120 bg-white position-relative z-1 overflow-hidden">
    <img src="../assets/img/shapes/leaf-shadow.png" alt="leaf" class="position-absolute leaf-shape z--1 rounded-circle">
    <img src="../assets/img/shapes/mango.png" alt="mango" class="position-absolute mango z--1"
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
            <div class="col-xl-8">
                <div class="banner-box background-banner rounded-2 banner-lg"
                    data-background="../assets/img/banner/banner-2.jpg">
                    <span class="badge bg-danger mb-2">Top Offer</span>
                    <h3 class="mb-6 text-white gshop-title">Fresh & Natural Healthy<br class="d-none d-sm-block"> Food
                        <mark class="position-relative text-secondary position-relative bg-transparent">Special
                            Offer<img src="../assets/img/shapes/border-line.png"
                                class="position-absolute start-0 border-line w-100" alt="border line"></mark></h3>
                    <a href="product-details.html" class="btn btn-secondary btn-md">Shop Now<span class="ms-2"><i
                                class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="banner-img rounded-3 overflow-hidden">
                    <img src="../assets/img/banner/banner-3.png" alt="banner" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner section end-->

<!--Category Section start-->
<section class="featured-products pt-120 pb-200 bg-shade position-relative overflow-hidden z-1">
    <img src="../assets/img/shapes/roll-1.png" alt="roll" class="position-absolute roll-1 z--1"
        data-parallax='{"y": -120}'>
    <img src="../assets/img/shapes/roll-2.png" alt="roll" class="position-absolute roll-2 z--1"
        data-parallax='{"y": 120}'>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center mb-4">
                    <h3 class="mb-2">Categories</h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique a eligendi
                        reiciendis ipsam error</p>
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
                            <a href="product-details.html"><img src="../assets/img/products/p-sm-1.png" alt="product"
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
                            <a href="product-details.html"
                                class="fw-bold text-heading title d-block"><?= $category['catname']?></a>
                            <div class="pricing mt-2">
                                <span class="fw-bold h4 me-1 text-muted"><?= $category['catdscr']?></span>
                            </div>
                            <a href="product-details.html" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop
                                Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>

                <!-- Card 2 -->
                <!-- <div class="col-md-6 mb-4">
                    <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4">
                        <div class="thumbnail position-relative rounded-2">
                            <a href="product-details.html"><img src="../assets/img/products/p-sm-2.png" alt="product" class="img-fluid"></a>
                            <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" class="rounded-btn">
                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                    </svg>
                                </a>
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
                            <a href="product-details.html" class="fw-bold text-heading title d-block">Fresh Tomato</a>
                            <div class="pricing mt-2">
                                <span class="fw-bold h4 deleted me-1 text-muted">$120.00</span>
                                <span class="fw-bold h4 text-danger">$100.00</span>
                            </div>
                            <a href="product-details.html" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>


        <!-- <div class="row g-4 justify-content-center">
            <div class="col-xxl-4 col-lg-6">
                <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4">
                    <div class="thumbnail position-relative rounded-2">
                        <a href="product-details.html"><img src="../assets/img/products/p-sm-1.png" alt="product" class="img-fluid"></a>
                        <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                            <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
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
                        <a href="product-details.html" class="fw-bold text-heading title d-block">Strawberry Fruit</a>
                        <div class="pricing mt-2">
                            <span class="fw-bold h4 deleted me-1 text-muted">$230.00</span>
                            <span class="fw-bold h4 text-danger">$180.00</span>
                        </div>
                        <a href="product-details.html" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4 mt-4">
                    <div class="thumbnail position-relative rounded-2">
                        <a href="product-details.html"><img src="../assets/img/products/p-sm-2.png" alt="product" class="img-fluid"></a>
                        <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                            <a href="#" class="rounded-btn">
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                </svg>
                            </a>
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
                        <a href="product-details.html" class="fw-bold text-heading title d-block">Fresh Tomato</a>
                        <div class="pricing mt-2">
                            <span class="fw-bold h4 deleted me-1 text-muted">$120.00</span>
                            <span class="fw-bold h4 text-danger">$100.00</span>
                        </div>
                        <a href="product-details.html" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                
            </div>
            <div class="col-xxl-4 col-lg-6 order-2 order-xxl-3">
                <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4">
                    <div class="thumbnail position-relative rounded-2">
                        <a href="product-details.html"><img src="../assets/img/products/p-sm-2.png" alt="product" class="img-fluid"></a>
                        <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                            <a href="#" class="rounded-btn">
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                </svg>
                            </a>
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
                        <a href="product-details.html" class="fw-bold text-heading title d-block">Fresh Tomato</a>
                        <div class="pricing mt-2">
                            <span class="fw-bold h4 deleted me-1 text-muted">$120.00</span>
                            <span class="fw-bold h4 text-danger">$100.00</span>
                        </div>
                        <a href="product-details.html" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4 mt-4">
                    <div class="thumbnail position-relative rounded-2">
                        <a href="product-details.html"><img src="../assets/img/products/p-sm-4.png" alt="product" class="img-fluid"></a>
                        <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                            <a href="#" class="rounded-btn">
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                </svg>
                            </a>
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
                        <a href="product-details.html" class="fw-bold text-heading title d-block">Cow Meat</a>
                        <div class="pricing mt-2">
                            <span class="fw-bold h4 deleted me-1 text-muted">$750.00</span>
                            <span class="fw-bold h4 text-danger">$650.00</span>
                        </div>
                        <a href="product-details.html" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4 mt-4">
                    <div class="thumbnail position-relative rounded-2">
                        <a href="product-details.html"><img src="../assets/img/products/p-sm-5.png" alt="product" class="img-fluid"></a>
                        <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                            <a href="#" class="rounded-btn">
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                </svg>
                            </a>
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
                        <a href="product-details.html" class="fw-bold text-heading title d-block">Broylar Checken</a>
                        <div class="pricing mt-2">
                            <span class="fw-bold h4 deleted me-1 text-muted">$550.00</span>
                            <span class="fw-bold h4 text-danger">$420.00</span>
                        </div>
                        <a href="product-details.html" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 gap-4 mt-4">
                    <div class="thumbnail position-relative rounded-2">
                        <a href="product-details.html"><img src="../assets/img/products/p-sm-6.png" alt="product" class="img-fluid"></a>
                        <div class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-solid fa-eye"></i></a>
                            <a href="#" class="rounded-btn">
                                <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z" fill="#5D6374" />
                                </svg>
                            </a>
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
                        <a href="product-details.html" class="fw-bold text-heading title d-block">Strawberry</a>
                        <div class="pricing mt-2">
                            <span class="fw-bold h4 deleted me-1 text-muted">$80.00</span>
                            <span class="fw-bold h4 text-danger">$60.00</span>
                        </div>
                        <a href="product-details.html" class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div> -->
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
                        <a href="product-details.html"><img src="../assets/img/products/<?= $product['product_image']?>"
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
                        <a href="product-details.html"
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
                <div class="banner-box background-banner rounded-2 overflow-hidden"
                    data-background="../assets/img/banner/banner-1.jpg">
                    <span class="gshop-subtitle fs-xxs mb-1 text-dark d-inline-block">100% Pur Products</span>
                    <h6 class="mb-0">Fresh Fruits</h6>
                    <h4 class="mb-6">Healthy Juice</h4>
                    <a href="product-details.html" class="explore-btn fw-bold text-dark">Shop Now<span class="ms-1"><i
                                class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="banner-box rounded-2 overflow-hidden position-relative banner-color-green z-1">
                    <img src="../assets/img/products/capsicum.png" alt="capsicum" class="banner-img">
                    <span class="gshop-subtitle fs-xxs mb-1 text-dark d-inline-block">Weekly Best Seller</span>
                    <h6 class="mb-0">Fresh Fruits</h6>
                    <h4 class="mb-6">Healthy Juice</h4>
                    <a href="product-details.html" class="explore-btn fw-bold text-dark">Shop Now<span class="ms-1"><i
                                class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="banner-box rounded-2 overflow-hidden position-relative z-1 banner-color-secondary">
                    <img src="../assets/img/products/lychee.png" alt="lychee" class="banner-img">
                    <span class="badge bg-danger gshop-subtitle mb-1">Top Offer</span>
                    <h6 class="mb-0">Fresh Fruits</h6>
                    <h4 class="mb-6">Healthy Juice</h4>
                    <a href="product-details.html" class="explore-btn fw-bold text-dark">Shop Now<span class="ms-1"><i
                                class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner section end-->

<!--best deals start-->
<section class="pb-120 position-relative z-1 pt-120">
    <div class="container">
        <div class="row g-4 align-items-center justify-content-center">
            <div class="col-xxl-4 col-xl-5 order-2 order-xxl-1">
                <div class="banner-box banner-color-green position-relative overflow-hidden z-1 rounded-2 pe-0 pb-0">
                    <span class="gshop-subtitle text-secondary mb-1">100% Organic Vegetable</span>
                    <h6 class="mb-0">Vegetable</h6>
                    <h4 class="mb-2">Fresh & Healthy</h4>
                    <p class="fw-medium mb-5">Get 50% Off on Selected Organic Items</p>
                    <a href="product-details.html" class="btn btn-primary btn-md">Show Now<span class="ms-2"><i
                                class="fas fa-arrow-right"></i></span></a>
                    <div class="banner-img-wrapper text-end mt--40">
                        <img src="../assets/img/banner/vegetables.png" alt="vegetables" class="">
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 order-1 order-xxl-2">
                <div
                    class="timing-box d-flex align-items-center justify-content-center justify-content-sm-between rounded-3 flex-wrap gap-3">
                    <h4 class="mb-0">Weekly Best Deals</h4>
                    <ul class="timing-countdown countdown-timer d-flex align-items-center gap-2"
                        data-date="06/30/2023 23:59:59">
                        <li
                            class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                            <h5 class="mb-0 days">00</h5>
                            <span class="gshop-subtitle fs-xxs d-block">Days</span>
                        </li>
                        <li
                            class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                            <h5 class="mb-0 hours">00</h5>
                            <span class="gshop-subtitle fs-xxs d-block">Days</span>
                        </li>
                        <li
                            class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                            <h5 class="mb-0 minutes">00</h5>
                            <span class="gshop-subtitle fs-xxs d-block">Days</span>
                        </li>
                        <li
                            class="position-relative z-1 d-flex align-items-center justify-content-center flex-column rounded-2">
                            <h5 class="mb-0 seconds">00</h5>
                            <span class="gshop-subtitle fs-xxs d-block">Days</span>
                        </li>
                    </ul>
                </div>
                <div class="mt-4">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div
                                class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 shadow gap-4">
                                <div class="thumbnail position-relative rounded-2">
                                    <a href="product-details.html"><img src="../assets/img/products/p-sm-1.png"
                                            alt="product" class="img-fluid"></a>
                                    <div
                                        class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                        <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                        <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="#" class="rounded-btn">
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z"
                                                    fill="#5D6374"></path>
                                            </svg>
                                        </a>
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
                                    <a href="product-details.html" class="fw-bold text-heading title d-block">European
                                        Lemon Zest</a>
                                    <div class="pricing mt-2">
                                        <span class="fw-bold h4 deleted me-1">$240.00</span>
                                        <span class="fw-bold h4 text-danger">$140.00</span>
                                    </div>
                                    <a href="product-details.html"
                                        class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span
                                            class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div
                                class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 shadow gap-4">
                                <div class="thumbnail position-relative rounded-2">
                                    <a href="product-details.html"><img src="../assets/img/products/p-sm-2.png"
                                            alt="product" class="img-fluid"></a>
                                    <div
                                        class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                        <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                        <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="#" class="rounded-btn">
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z"
                                                    fill="#5D6374"></path>
                                            </svg>
                                        </a>
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
                                    <a href="product-details.html" class="fw-bold text-heading title d-block">European
                                        Lemon Zest</a>
                                    <div class="pricing mt-2">
                                        <span class="fw-bold h4 deleted me-1">$240.00</span>
                                        <span class="fw-bold h4 text-danger">$140.00</span>
                                    </div>
                                    <a href="product-details.html"
                                        class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span
                                            class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div
                                class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 shadow gap-4">
                                <div class="thumbnail position-relative rounded-2">
                                    <a href="product-details.html"><img src="../assets/img/products/p-sm-3.png"
                                            alt="product" class="img-fluid"></a>
                                    <div
                                        class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                        <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                        <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="#" class="rounded-btn">
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z"
                                                    fill="#5D6374"></path>
                                            </svg>
                                        </a>
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
                                    <a href="product-details.html" class="fw-bold text-heading title d-block">European
                                        Lemon Zest</a>
                                    <div class="pricing mt-2">
                                        <span class="fw-bold h4 deleted me-1">$240.00</span>
                                        <span class="fw-bold h4 text-danger">$140.00</span>
                                    </div>
                                    <a href="product-details.html"
                                        class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span
                                            class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div
                                class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 shadow gap-4">
                                <div class="thumbnail position-relative rounded-2">
                                    <a href="product-details.html"><img src="../assets/img/products/p-sm-4.png"
                                            alt="product" class="img-fluid"></a>
                                    <div
                                        class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                        <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                        <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="#" class="rounded-btn">
                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z"
                                                    fill="#5D6374"></path>
                                            </svg>
                                        </a>
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
                                    <a href="product-details.html" class="fw-bold text-heading title d-block">European
                                        Lemon Zest</a>
                                    <div class="pricing mt-2">
                                        <span class="fw-bold h4 deleted me-1">$240.00</span>
                                        <span class="fw-bold h4 text-danger">$140.00</span>
                                    </div>
                                    <a href="product-details.html"
                                        class="fs-xs fw-bold mt-3 d-inline-block explore-btn">Shop Now<span
                                            class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--best deals end-->

<!--feedback section start-->
<section class="ptb-120 bg-shade position-relative overflow-hidden z-1 feedback-section">
    <img src="../assets/img/shapes/bg-shape-5.png" alt="bg shape" class="position-absolute start-0 bottom-0 z--1 w-100">
    <img src="../assets/img/shapes/map-bg.png" alt="map"
        class="position-absolute start-50 top-50 translate-middle z--1">
    <img src="../assets/img/shapes/fd-1.png" alt="shape" class="position-absolute z--1 fd-1">
    <img src="../assets/img/shapes/fd-2.png" alt="shape" class="position-absolute z--1 fd-2">
    <img src="../assets/img/shapes/fd-3.png" alt="shape" class="position-absolute z--1 fd-3">
    <img src="../assets/img/shapes/fd-4.png" alt="shape" class="position-absolute z--1 fd-4">
    <img src="../assets/img/shapes/fd-5.png" alt="shape" class="position-absolute z--1 fd-5">
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

<!--products listing start-->
<section class="pt-80 pb-120">
    <div class="container">
        <div class="row justify-content-center g-4">
            <div class="col-xxl-4 col-lg-6">
                <div class="product-listing-box bg-white">
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-5 flex-wrap">
                        <h4 class="mb-0">New Products</h4>
                        <a href="shop-grid.html" class="explore-btn text-secondary fw-bold">View More<span
                                class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                    </div>
                    <div
                        class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 mt-3 border card-md gap-4">
                        <div class="thumbnail position-relative rounded-2">
                            <a href="product-details.html"><img src="../assets/img/products/p-sm-1.png" alt="product"
                                    class="img-fluid"></a>
                            <div
                                class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">
                                <a href="#" class="rounded-btn fs-xs"><i class="fa-regular fa-heart"></i></a>
                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn fs-xs"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="#" class="rounded-btn fs-xs">
                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z"
                                            fill="#5D6374"></path>
                                    </svg>
                                </a>
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
                            <a href="product-details.html" class="fw-bold text-heading title d-block fs-sm">European
                                Lemon Zest</a>
                            <div class="pricing mt-2">
                                <span class="fw-bold h4 deleted me-1">$240.00</span>
                                <span class="fw-bold h4 text-danger">$140.00</span>
                            </div>
                            <a href="product-details.html" class="fs-xs fw-bold mt-10 d-inline-block explore-btn">Shop
                                Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div
                        class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 mt-3 border card-md gap-4">
                        <div class="thumbnail position-relative rounded-2">
                            <a href="product-details.html"><img src="../assets/img/products/p-sm-2.png" alt="product"
                                    class="img-fluid"></a>
                            <div
                                class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">
                                <a href="#" class="rounded-btn fs-xs"><i class="fa-regular fa-heart"></i></a>
                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn fs-xs"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="#" class="rounded-btn fs-xs">
                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z"
                                            fill="#5D6374"></path>
                                    </svg>
                                </a>
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
                            <a href="product-details.html" class="fw-bold text-heading title d-block fs-sm">European
                                Lemon Zest</a>
                            <div class="pricing mt-2">
                                <span class="fw-bold h4 deleted me-1">$240.00</span>
                                <span class="fw-bold h4 text-danger">$140.00</span>
                            </div>
                            <a href="product-details.html" class="fs-xs fw-bold mt-10 d-inline-block explore-btn">Shop
                                Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div
                        class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 mt-3 border card-md gap-4">
                        <div class="thumbnail position-relative rounded-2">
                            <a href="product-details.html"><img src="../assets/img/products/p-sm-3.png" alt="product"
                                    class="img-fluid"></a>
                            <div
                                class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">
                                <a href="#" class="rounded-btn fs-xs"><i class="fa-regular fa-heart"></i></a>
                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn fs-xs"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="#" class="rounded-btn fs-xs">
                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z"
                                            fill="#5D6374"></path>
                                    </svg>
                                </a>
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
                            <a href="product-details.html" class="fw-bold text-heading title d-block fs-sm">European
                                Lemon Zest</a>
                            <div class="pricing mt-2">
                                <span class="fw-bold h4 deleted me-1">$240.00</span>
                                <span class="fw-bold h4 text-danger">$140.00</span>
                            </div>
                            <a href="product-details.html" class="fs-xs fw-bold mt-10 d-inline-block explore-btn">Shop
                                Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6">
                <div class="product-listing-box bg-white">
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-5 flex-wrap">
                        <h4 class="mb-0">Organic Bestseller</h4>
                        <a href="#" class="explore-btn text-secondary fw-bold">View More<span class="ms-2"><i
                                    class="fas fa-arrow-right"></i></span></a>
                    </div>
                    <div
                        class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 mt-3 border card-md gap-4">
                        <div class="thumbnail position-relative rounded-2">
                            <a href="product-details.html"><img src="../assets/img/products/p-sm-4.png" alt="product"
                                    class="img-fluid"></a>
                            <div
                                class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">
                                <a href="#" class="rounded-btn fs-xs"><i class="fa-regular fa-heart"></i></a>
                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn fs-xs"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="#" class="rounded-btn fs-xs">
                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z"
                                            fill="#5D6374"></path>
                                    </svg>
                                </a>
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
                            <a href="product-details.html" class="fw-bold text-heading title d-block fs-sm">European
                                Lemon Zest</a>
                            <div class="pricing mt-2">
                                <span class="fw-bold h4 deleted me-1">$240.00</span>
                                <span class="fw-bold h4 text-danger">$140.00</span>
                            </div>
                            <a href="product-details.html" class="fs-xs fw-bold mt-10 d-inline-block explore-btn">Shop
                                Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div
                        class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 mt-3 border card-md gap-4">
                        <div class="thumbnail position-relative rounded-2">
                            <a href="product-details.html"><img src="../assets/img/products/p-sm-5.png" alt="product"
                                    class="img-fluid"></a>
                            <div
                                class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">
                                <a href="#" class="rounded-btn fs-xs"><i class="fa-regular fa-heart"></i></a>
                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn fs-xs"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="#" class="rounded-btn fs-xs">
                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z"
                                            fill="#5D6374"></path>
                                    </svg>
                                </a>
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
                            <a href="product-details.html" class="fw-bold text-heading title d-block fs-sm">European
                                Lemon Zest</a>
                            <div class="pricing mt-2">
                                <span class="fw-bold h4 deleted me-1">$240.00</span>
                                <span class="fw-bold h4 text-danger">$140.00</span>
                            </div>
                            <a href="product-details.html" class="fs-xs fw-bold mt-10 d-inline-block explore-btn">Shop
                                Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div
                        class="horizontal-product-card d-sm-flex align-items-center p-3 bg-white rounded-2 mt-3 border card-md gap-4">
                        <div class="thumbnail position-relative rounded-2">
                            <a href="product-details.html"><img src="../assets/img/products/p-sm-6.png" alt="product"
                                    class="img-fluid"></a>
                            <div
                                class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-1 rounded-2">
                                <a href="#" class="rounded-btn fs-xs"><i class="fa-regular fa-heart"></i></a>
                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn fs-xs"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="#" class="rounded-btn fs-xs">
                                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.86193 0.189422C9.62476 0.422214 9.62476 0.799637 9.86193 1.03243L10.6472 1.80311H7.25462C5.91292 1.80311 4.82521 2.87064 4.82521 4.18749V4.78359C4.82521 5.11281 5.09713 5.37968 5.43256 5.37968C5.768 5.37968 6.03991 5.11281 6.03991 4.78359V4.18749C6.03991 3.52906 6.58374 2.9953 7.25462 2.9953H10.6472L9.86193 3.76599C9.62476 3.99877 9.62476 4.37622 9.86193 4.60899C10.0991 4.84177 10.4837 4.84177 10.7208 4.60899L12.5429 2.82071C12.7801 2.58792 12.7801 2.2105 12.5429 1.9777L10.7208 0.189422C10.4837 -0.0433652 10.0991 -0.0433652 9.86193 0.189422ZM7.86197 4.18749C7.52653 4.18749 7.25462 4.45436 7.25462 4.78359V5.37968C7.25462 6.03813 6.7108 6.57187 6.03991 6.57187H2.64736L3.43261 5.80118C3.66979 5.5684 3.66979 5.19096 3.43261 4.95818C3.19542 4.72541 2.81087 4.72541 2.57368 4.95818L0.751618 6.74647C0.514435 6.97924 0.514435 7.35669 0.751618 7.58946L2.57368 9.37775C2.81087 9.61052 3.19542 9.61052 3.43261 9.37775C3.66979 9.14497 3.66979 8.76752 3.43261 8.53475L2.64736 7.76406H6.03991C7.38162 7.76406 8.46933 6.69651 8.46933 5.37968V4.78359C8.46933 4.45436 8.19742 4.18749 7.86197 4.18749Z"
                                            fill="#5D6374"></path>
                                    </svg>
                                </a>
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
                            <a href="product-details.html" class="fw-bold text-heading title d-block fs-sm">European
                                Lemon Zest</a>
                            <div class="pricing mt-2">
                                <span class="fw-bold h4 deleted me-1">$240.00</span>
                                <span class="fw-bold h4 text-danger">$140.00</span>
                            </div>
                            <a href="product-details.html" class="fs-xs fw-bold mt-10 d-inline-block explore-btn">Shop
                                Now<span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10">
                <div class="vertical-banner text-center bg-white rounded-2"
                    data-background="../assets/img/banner/banner-4.jpg">
                    <h5 class="mb-1">Fresh & Organic Spice</h5>
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <span class="hot-badge bg-danger fw-bold fs-xs position-relative text-white">HOT</span>
                        <span class="offer-title text-danger fw-bold">30% Off</span>
                    </div>
                    <a href="product-details.html" class="explore-btn text-primary fw-bold">Shop Now<span
                            class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                </div>
                <div class="counter-box bg-white rounded-2 mt-4">
                    <div class="horizontal-counter d-flex align-items-center gap-3">
                        <span
                            class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-2 bg-glimpse-pink flex-shrink-0">
                            <img src="../assets/img/icons/letter-box.svg" alt="icon" class="img-fluid">
                        </span>
                        <div class="numbers">
                            <h3 class="mb-1"><span class="counter">456</span>k+</h3>
                            <h6 class="mb-0 text-gray fs-sm">Total Products</h6>
                        </div>
                    </div>
                    <span class="gradient-spacer-2 d-block my-4"></span>
                    <div class="horizontal-counter d-flex align-items-center gap-3">
                        <span
                            class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-2 bg-azure-mist flex-shrink-0">
                            <img src="../assets/img/icons/thumbs-up.svg" alt="icon" class="img-fluid">
                        </span>
                        <div class="numbers">
                            <h3 class="mb-1"><span class="counter">16</span>M+</h3>
                            <h6 class="mb-0 text-gray fs-sm">Customer Satisfaction</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--products listing end-->

<?php
include('../includes/footer.php');
?>