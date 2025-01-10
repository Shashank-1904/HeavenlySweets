<?php
$pageName = "Home";
include('../includes/header.php');
include('../includes/navbar.php');
?>

<!--preloader start-->
<div id="preloader">
        <img src="../assets/img/preloader.gif" alt="preloader" width="450" class="img-fluid">
    </div>
    <!--preloader end-->

    <div class="main-wrapper">


        <!--offcanvas menu start-->
        <div class="offcanvas_menu position-fixed">
            <div class="tt-short-info d-none d-md-none d-lg-none d-xl-block">
                <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
                <a href="#" class="logo-wrapper d-inline-block mb-5"><img src="../assets/img/logo.png" alt="logo" /></a>
                <div class="offcanvas-content">
                    <h4 class="mb-4">About Us</h4>
                    <p>
                        Explain to you how all this mistaken denouncing pleasure and praising pain was born and we will give you
                        a complete account of the system, and expound the actual teachings.
                    </p>
                    <p>
                        Mistaken denouncing pleasure and praising pain was born and we will give you complete account of the
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
                            <a href="javascript:void(0)">Home<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
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
                            <a href="javascript:void(0)">Products<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-grid-2.html">Shop Grid V2</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Blog<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-listing.html">Blog List</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Pages<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
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
            <img src="../assets/img/shapes/bg-shape-6.png" alt="bg-shape" class="position-absolute start-0 z--1 w-100 bg-shape">
            <img src="../assets/img/shapes/pata-xs.svg" alt="pata" class="position-absolute pata-xs z--1 vector-shape">
            <img src="../assets/img/shapes/onion.png" alt="onion" class="position-absolute z--1 onion start-0 top-0 vector-shape">
            <img src="../assets/img/shapes/frame-circle.svg" alt="frame circle" class="position-absolute z--1 frame-circle vector-shape">
            <img src="../assets/img/shapes/leaf.svg" alt="leaf" class="position-absolute z--1 leaf vector-shape">
            <img src="../assets/img/shapes/garlic-white.png" alt="garlic" class="position-absolute z--1 garlic vector-shape">
            <img src="../assets/img/shapes/roll-1.png" alt="roll" class="position-absolute z--1 roll vector-shape">
            <img src="../assets/img/shapes/roll-2.png" alt="roll" class="position-absolute z--1 roll-2 vector-shape">
            <img src="../assets/img/shapes/pata-xs.svg" alt="roll" class="position-absolute z--1 pata-xs-2 vector-shape">
            <img src="../assets/img/shapes/tomato-half.svg" alt="tomato" class="position-absolute z--1 tomato-half vector-shape">
            <img src="../assets/img/shapes/tomato-slice.svg" alt="tomato" class="position-absolute z--1 tomato-slice vector-shape">
            <img src="../assets/img/shapes/cauliflower.png" alt="tomato" class="position-absolute z--1 cauliflower vector-shape">
            <img src="../assets/img/shapes/leaf-gray.png" alt="tomato" class="position-absolute z--1 leaf-gray vector-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="mb-2 text-center">About Us</h2>
                            <nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item fw-semibold" aria-current="page"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item fw-semibold" aria-current="page">Page</li>
                                    <li class="breadcrumb-item fw-semibold" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb section end-->

        <!--about section start-->
        <section class="pt-120 ab-about-section position-relative z-1 overflow-hidden">
            <img src="../assets/img/shapes/mango.png" alt="mango" class="position-absolute mango z--1">
            <div class="container">
                <div class="row g-5 g-xl-4 align-items-center">
                    <div class="col-xl-6">
                        <div class="ab-left position-relative">
                            <img src="../assets/img/about/ab-1.png" alt="image" class="img-fluid">
                            <div class="text-end">
                                <div class="ab-quote p-4 text-start">
                                    <h4 class="mb-0 fw-normal text-white">“Assertively target market Lorem ipsum is simply free consectetur notted elit sed do eiusmod” <span class="fs-md fw-medium position-relative">George Scholll</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="ab-about-right">
                            <div class="subtitle d-flex align-items-center gap-3 flex-wrap">
                                <span class="gshop-subtitle">100% Organic Food Provide</span>
                                <span>
                                  <svg width="78" height="16" viewBox="0 0 78 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <line x1="0.0138875" y1="7.0001" x2="72.0139" y2="8.0001" stroke="#FF7C08" stroke-width="2"/>
                                      <path d="M78 8L66 14.9282L66 1.0718L78 8Z" fill="#FF7C08"/>
                                  </svg>    
                              </span>
                            </div>
                            <h2 class="mb-4">Be healthy & eat fresh<br> organic food</h2>
                            <p class="mb-8">Assertively target market lorem ipsum is simply free text available dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply freeutation labore et dolore.</p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="image-box py-6 px-4 image-box-border">
                                        <div class="icon position-relative">
                                            <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                        </div>
                                        <h4 class="mt-3">Our Mission</h4>
                                        <p class="mb-0">Continually transform virtual meta- methodologies. leverage existing alignments.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image-box py-6 px-4 image-box-border">
                                        <div class="icon position-relative">
                                            <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                        </div>
                                        <h4 class="mt-3">Our Vision</h4>
                                        <p class="mb-0">Continually transform virtual meta- methodologies. leverage existing alignments.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--about section end-->

        <!--brands section start-->
        <section class="brands-section ptb-120 position-relative z-1 overflow-hidden service-section">
            <img src="../assets/img/shapes/bg-shape-4.png" alt="bg shape" class="position-absolute start-0 bottom-0 w-100 z--1 bg-shape">
            <div class="container">
                <div class="brand-wrapper px-5 rounded-4">
                    <h4 class="section-title mb-0">The Most Popular Brands</h4>
                    <div class="brands-slider swiper px-2 pt-4 pb-7">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide brand-item rounded">
                                <img src="../assets/img/brands/brand-1.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="swiper-slide brand-item rounded">
                                <img src="../assets/img/brands/brand-2.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="swiper-slide brand-item rounded">
                                <img src="../assets/img/brands/brand-3.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="swiper-slide brand-item rounded">
                                <img src="../assets/img/brands/brand-4.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="swiper-slide brand-item rounded">
                                <img src="../assets/img/brands/brand-5.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="swiper-slide brand-item rounded">
                                <img src="../assets/img/brands/brand-2.png" alt="brand" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--brands section end-->

        <!--feature section start-->
        <section class="about-section bg-shade position-relative z-1">
            <img src="../assets/img/shapes/bg-shape-5.png" alt="bg shape" class="position-absolute start-0 bottom-0 z--1 w-100">
            <img src="../assets/img/shapes/roll-color.png" alt="roll" class="position-absolute roll-color z--1" data-parallax='{"y": -50}'>
            <img src="../assets/img/shapes/roll-color-curve.png" alt="roll" class="position-absolute roll-color-curve z--1" data-parallax='{"y": 50}'>
            <img src="../assets/img/shapes/onion-color.png" alt="onion" class="position-absolute onion-color z--1" data-parallax='{"x": -30}'>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h2 class="mb-3">Our Working Ability</h2>
                            <p class="mb-0">Assertively target market lorem ipsum is simply free text available dolor incididunt simply free ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center g-4 mt-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="horizontal-counter d-flex align-items-center gap-3 bg-white rounded p-4">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center flex-shrink-0">
                              <img src="../assets/img/icons/icon-1.png" alt="icon" class="img-fluid">
                          </span>
                            <div class="numbers">
                                <h3 class="mb-1"><span class="counter">3256</span>k+</h3>
                                <h6 class="mb-0 text-gray fs-sm">Total Products</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="horizontal-counter d-flex align-items-center gap-3 bg-white rounded p-4">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center flex-shrink-0">
                              <img src="../assets/img/icons/icon-2.png" alt="icon" class="img-fluid">
                          </span>
                            <div class="numbers">
                                <h3 class="mb-1"><span class="counter">2456</span>k+</h3>
                                <h6 class="mb-0 text-gray fs-sm">Total Orders</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="horizontal-counter d-flex align-items-center gap-3 bg-white rounded p-4">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center flex-shrink-0">
                              <img src="../assets/img/icons/icon-3.png" alt="icon" class="img-fluid">
                          </span>
                            <div class="numbers">
                                <h3 class="mb-1"><span class="counter">1250</span>k+</h3>
                                <h6 class="mb-0 text-gray fs-sm">Total Visitors</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="horizontal-counter d-flex align-items-center gap-3 bg-white rounded p-4">
                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center flex-shrink-0">
                              <img src="../assets/img/icons/icon-4.png" alt="icon" class="img-fluid">
                          </span>
                            <div class="numbers">
                                <h3 class="mb-1"><span class="counter">1245</span>k+</h3>
                                <h6 class="mb-0 text-gray fs-sm">Total Delivery</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--feature section end-->

        <!--feedback section start-->
        <!-- <section class="feedback-section pt-100 pb-120 position-relative z-1 overflow-hidden service-section">
            <img src="../assets/img/shapes/bg-shape-4.png" alt="bg shape" class="position-absolute start-0 bottom-0 w-100 z--1 bg-shape">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-xl-7">
                        <div class="clients_thumb">
                            <img src="../assets/img/about/clients.png" alt="clients" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="swiper feedback-slider-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide feedback-card bg-white rounded py-6 px-4">
                                    <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                        <img src="../assets/img/authors/client-1.png" alt="client" class="img-fluid rounded-circle flex-shrink-0">
                                        <div class="clients-info">
                                            <h5 class="mb-1">George Nakashima</h5>
                                            <ul class="d-flex align-items-center fs-xs text-warning">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">“Conveniently synergize premium collaboration and idea-sharing with compelling "outside the box" thinking. Interactivel product distinctive paradigms whereas one-to-one intellectual capital. resource sucking services. Objectively customize vertical.”</p>
                                </div>
                                <div class="swiper-slide feedback-card bg-white rounded py-6 px-4">
                                    <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                        <img src="../assets/img/authors/client-2.png" alt="client" class="img-fluid rounded-circle flex-shrink-0">
                                        <div class="clients-info">
                                            <h5 class="mb-1">George Nakashima</h5>
                                            <ul class="d-flex align-items-center fs-xs text-warning">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">“Conveniently synergize premium collaboration and idea-sharing with compelling "outside the box" thinking. Interactivel product distinctive paradigms whereas one-to-one intellectual capital. resource sucking services. Objectively customize vertical.”</p>
                                </div>
                                <div class="swiper-slide feedback-card bg-white rounded py-6 px-4">
                                    <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                        <img src="../assets/img/authors/client-3.png" alt="client" class="img-fluid rounded-circle flex-shrink-0">
                                        <div class="clients-info">
                                            <h5 class="mb-1">George Nakashima</h5>
                                            <ul class="d-flex align-items-center fs-xs text-warning">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">“Conveniently synergize premium collaboration and idea-sharing with compelling "outside the box" thinking. Interactivel product distinctive paradigms whereas one-to-one intellectual capital. resource sucking services. Objectively customize vertical.”</p>
                                </div>
                            </div>
                            <div class="slider-arrows text-end mt-5">
                                <button type="button" class="fd2-arrow-left"><i class="fas fa-angle-left"></i></button>
                                <button type="button" class="fd2-arrow-right"><i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> feedback section end -->

        <!--team section start-->
        <section class="grostore-team-section pt-6 bg-shade position-relative z-1 overflow-hidden">
            <img src="../assets/img/shapes/bg-shape-5.png" alt="bg shape" class="position-absolute start-0 bottom-0 z--1 w-100">
            <div class="container">
                <div class="row align-items-center g-3">
                    <div class="col-xl-3">
                        <div class="section-title">
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <h6 class="mb-0 gshop-subtitle text-secondary">Team Members</h6>
                                <span>
                                  <svg width="58" height="10" viewBox="0 0 58 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <line x1="-6.99382e-08" y1="5.2" x2="52" y2="5.2" stroke="#FF7C08" stroke-width="1.6"/>
                                      <path d="M58 5L50.5 9.33013L50.5 0.669872L58 5Z" fill="#FF7C08"/>
                                  </svg>
                              </span>
                            </div>
                            <h2 class="mb-3">Our Online Customer Help! Member</h2>
                            <p class="mb-7">Rationally encounter extremely painful there anyone.</p>
                            <div class="d-flex align-items-center gap-3">
                                <button type="button" class="team-slider-prev-btn team-slider-btn"><i class="fas fa-angle-left"></i></button>
                                <button type="button" class="team-slider-next-btn team-slider-btn"><i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="swiper team-slider">
                            <div class="swiper-wrapper">
                                <div class="team-card text-center bg-white rounded py-7 px-4 swiper-slide">
                                    <div class="team-thumb mb-5">
                                        <img src="../assets/img/authors/team-1.jpg" alt="team" class="img-fluid rounded-circle">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                    <h5>Frances Gilmartin</h5>
                                    <span>CEO &amp; Founder</span>
                                </div>
                                <div class="team-card text-center bg-white rounded py-7 px-4 swiper-slide">
                                    <div class="team-thumb mb-5">
                                        <img src="../assets/img/authors/team-2.jpg" alt="team" class="img-fluid rounded-circle">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                    <h5>Frances Gilmartin</h5>
                                    <span>CEO &amp; Founder</span>
                                </div>
                                <div class="team-card text-center bg-white rounded py-7 px-4 swiper-slide">
                                    <div class="team-thumb mb-5">
                                        <img src="../assets/img/authors/team-1.jpg" alt="team" class="img-fluid rounded-circle">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                    <h5>Frances Gilmartin</h5>
                                    <span>CEO &amp; Founder</span>
                                </div>
                                <div class="team-card text-center bg-white rounded py-7 px-4 swiper-slide">
                                    <div class="team-thumb mb-5">
                                        <img src="../assets/img/authors/team-2.jpg" alt="team" class="img-fluid rounded-circle">
                                        <div class="team-social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                    <h5>Frances Gilmartin</h5>
                                    <span>CEO &amp; Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--team section end-->

        <!--call to action start-->
        <section class="cta-section pb-120">
            <div class="container">
                <div class="cta-box rounded text-center" data-background="../assets/img/banner/cta-banner.jpg">
                    <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 mb-2">
                        <h6 class="mb-0 text-secondary gshop-subtitle">Weekend Offer</h6>
                        <span>
                          <svg width="58" height="10" viewBox="0 0 58 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <line x1="-6.99382e-08" y1="5.2" x2="52" y2="5.2" stroke="#FF7C08" stroke-width="1.6"/>
                              <path d="M58 5L50.5 9.33013L50.5 0.669872L58 5Z" fill="#FF7C08"/>
                          </svg>   
                      </span>
                    </div>
                    <h3 class="mb-5">Organic Foods Up to 40% off</h3>
                    <a href="shop-grid.html" class="btn btn-secondary">Shop Now<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
        </section> <!--call to action end-->

        <!--about us section-->
        <section class="about-us-section pb-120">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-xl-5">
                        <div class="about-us-left position-relative">
                            <img src="../assets/img/about/ab-2.png" alt="not found" class="img-fluid">
                            <div class="exp-box p-3 bg-white rounded-circle position-absolute">
                                <div class="bg-secondary w-100 h-100 rounded-circle d-flex align-items-center justify-content-center flex-column">
                                    <h2 class="text-white">14+</h2>
                                    <span class="h6 text-white">Year's Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="about-us-right">
                            <div class="section-title-mx mb-6">
                                <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                                    <h6 class="mb-0 gshop-subtitle text-secondary">Why Choose Us</h6>
                                    <span>
                                      <svg width="58" height="10" viewBox="0 0 58 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <line x1="-6.99382e-08" y1="5.2" x2="52" y2="5.2" stroke="#FF7C08" stroke-width="1.6"/>
                                          <path d="M58 5L50.5 9.33013L50.5 0.669872L58 5Z" fill="#FF7C08"/>
                                      </svg>
                                  </span>
                                </div>
                                <h2 class="mb-3">We do not Buy from the Open Market</h2>
                                <p class="mb-0">Compellingly fashion intermandated opportunities and multimedia based fnsparent e-business.</p>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                        <span class="icon-wrapper position-relative flex-shrink-0">
                                          <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                      </span>
                                        <div class="content-right">
                                            <h5 class="mb-3">Trusted Partner</h5>
                                            <p class="mb-0">Compellingly fashion intermandat opportunities e-business fashion intermandated business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                        <span class="icon-wrapper position-relative flex-shrink-0">
                                          <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                      </span>
                                        <div class="content-right">
                                            <h5 class="mb-3">Return Policy</h5>
                                            <p class="mb-0">Compellingly fashion intermandat opportunities e-business fashion intermandated business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                        <span class="icon-wrapper position-relative flex-shrink-0">
                                          <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                      </span>
                                        <div class="content-right">
                                            <h5 class="mb-3">100% Organic Fresh</h5>
                                            <p class="mb-0">Compellingly fashion intermandat opportunities e-business fashion intermandated business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                        <span class="icon-wrapper position-relative flex-shrink-0">
                                          <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                      </span>
                                        <div class="content-right">
                                            <h5 class="mb-3">Secured Payment</h5>
                                            <p class="mb-0">Compellingly fashion intermandat opportunities e-business fashion intermandated business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--about us section end-->

        <!--footer section start-->
        <div class="footer-curve position-relative overflow-hidden">
            <span class="position-absolute section-curve-wrapper top-0 h-100" data-background="../assets/img/shapes/section-curve.png"></span>
        </div>
        <footer class="gshop-footer position-relative pt-8 bg-dark z-1 overflow-hidden">
            <img src="../assets/img/shapes/tomato.svg" alt="tomato" class="position-absolute z--1 tomato vector-shape">
            <img src="../assets/img/shapes/pata-lg.svg" alt="pata" class="position-absolute z--1 pata-lg vector-shape">
            <img src="../assets/img/shapes/pata-xs.svg" alt="pata" class="position-absolute z--1 pata-xs vector-shape">
            <img src="../assets/img/shapes/frame-circle.svg" alt="frame" class="position-absolute z--1 frame-circle vector-shape">
            <img src="../assets/img/shapes/leaf.svg" alt="leaf" class="position-absolute z--1 leaf vector-shape">
            <!--shape right -->
            <img src="../assets/img/shapes/leaf.svg" alt="pata" class="position-absolute leaf-2 z--1 vector-shape">
            <img src="../assets/img/shapes/pata-xs.svg" alt="pata" class="position-absolute pata-xs-2 z--1 vector-shape">
            <img src="../assets/img/shapes/tomato-slice.svg" alt="tomato slice" class="position-absolute tomato-slice vector-shape z--1">
            <img src="../assets/img/shapes/tomato-half.svg" alt="tomato" class="position-absolute tomato-half z--1 vector-shape">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="gshop_subscribe_form text-center">
                            <h4 class="text-white gshop-title">Subscribe to the G-Shop <mark class="p-0 position-relative text-secondary bg-transparent">New Arrivals <img src="../assets/img/shapes/border-line.svg" alt="border line" class="position-absolute border-line"></mark><br class="d-none d-sm-block">& Other Information.</h4>
                            <form class="mt-5 d-flex align-items-center bg-white rounded subscribe_form">
                                <input type="email" class="form-control" placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-primary flex-shrink-0">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <span class="gradient-spacer my-8 d-block"></span>
                <div class="row g-5">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="text-white mb-4">Category</h5>
                            <ul class="footer-nav">
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Location & Working Hours</a></li>
                                <li><a href="#">Our Guarantee</a></li>
                                <li><a href="#">Track Your Order</a></li>
                                <li><a href="#">Help Page</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="text-white mb-4">Quick Links</h5>
                            <ul class="footer-nav">
                                <li><a href="#">Your Account</a></li>
                                <li><a href="#">Returns & Exchanges</a></li>
                                <li><a href="#">Return Center</a></li>
                                <li><a href="#">Purchase History</a></li>
                                <li><a href="#">Latest News Blog</a></li>
                                <li><a href="#">Shipping & Delivery</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="text-white mb-4">Contact Us</h5>
                            <ul class="footer-nav">
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Location & Working Hours</a></li>
                                <li><a href="#">Our Guarantee</a></li>
                                <li><a href="#">Track Your Order</a></li>
                                <li><a href="#">Help Page</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="text-white mb-4">Customer Support</h5>
                            <ul class="footer-nav">
                                <li><a href="#">Your Account</a></li>
                                <li><a href="#">Returns & Exchanges</a></li>
                                <li><a href="#">Return Center</a></li>
                                <li><a href="#">Purchase History</a></li>
                                <li><a href="#">Latest News Blog</a></li>
                                <li><a href="#">Shipping & Delivery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright pt-120 pb-3">
                <span class="gradient-spacer d-block mb-3"></span>
                <div class="container">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-4">
                            <div class="copyright-text">
                                <p class="mb-0 text-white">&copy; All rights reserved Made by <a href="#" class="text-secondary">ThemeTags</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="logo-wrapper text-center">
                                <a href="index.html" class="logo"><img src="../assets/img/logo-white.png" alt="logo" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-payments-info d-flex align-items-center justify-content-lg-end gap-2">
                                <div class="supported-payment-box rounded-1 bg-dark-light d-inline-flex align-items-center justify-content-center p-2 flex-shrink-0">
                                    <img src="../assets/img/brands/visa.png" alt="visa" class="img-fluid">
                                </div>
                                <div class="supported-payment-box rounded-1 bg-dark-light d-inline-flex align-items-center justify-content-center p-2 flex-shrink-0">
                                    <img src="../assets/img/brands/mastercard.png" alt="visa" class="img-fluid">
                                </div>
                                <div class="supported-payment-box rounded-1 bg-dark-light d-inline-flex align-items-center justify-content-center p-2 flex-shrink-0">
                                    <img src="../assets/img/brands/payoneer.png" alt="visa" class="img-fluid">
                                </div>
                                <div class="supported-payment-box rounded-1 bg-dark-light d-inline-flex align-items-center justify-content-center p-2 flex-shrink-0">
                                    <img src="../assets/img/brands/paypal.png" alt="visa" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="mobile-toolbar d-block d-md-none d-lg-none">
            <div class="d-table table-layout-fixed w-100">
                <a class="d-table-cell mobile-toolbar-item mobile-menu-toggle" href="#">
                    <span class="mobile-toolbar-icon"><i class="fas fa-bars"></i></span><span
                class="mobile-toolbar-label">Category
            </span>
                </a>
                <div class="gshop-header-search dropdown d-table-cell mobile-toolbar-item">
                    <button class="header-icon" type="button" data-bs-toggle="dropdown">
                        <span class="mobile-toolbar-icon">
                  <svg width="18" height="23" viewBox="0 0 22 23" fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.68859 0.5C4.34645 0.5 0 4.84646 0 10.1886C0 15.5311 4.34645 19.8772 9.68859 19.8772C15.031 19.8772 19.3772 15.5311 19.3772 10.1886C19.3772 4.84646 15.031 0.5 9.68859 0.5ZM9.68859 18.0886C5.33261 18.0886 1.78866 14.5447 1.78866 10.1887C1.78866 5.83266 5.33261 2.28867 9.68859 2.28867C14.0446 2.28867 17.5885 5.83262 17.5885 10.1886C17.5885 14.5446 14.0446 18.0886 9.68859 18.0886Z" fill="#5D6374"/>
                      <path d="M21.7406 20.9824L16.6436 15.8853C16.2962 15.538 15.7338 15.538 15.3865 15.8853C15.0391 16.2323 15.0391 16.7954 15.3865 17.1424L20.4835 22.2395C20.6571 22.4131 20.8845 22.5 21.1121 22.5C21.3393 22.5 21.5669 22.4131 21.7406 22.2395C22.0879 21.8925 22.0879 21.3294 21.7406 20.9824Z" fill="#5D6374"/>
                  </svg>
              </span>
                        <span class="mobile-toolbar-label">Search</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-start border-0">
                        <form class="search-form d-flex align-items-center" action="#">
                            <input type="text" placeholder="Search products..." class="w-100">
                            <button type="submit" class="submit-icon-btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
                <a class="d-table-cell mobile-toolbar-item" href="my-account.html">
                    <span class="mobile-toolbar-icon">
            <svg width="18" height="25" viewBox="0 0 22 25" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.092 11.9546C12.6656 11.9546 14.0281 11.3902 15.1416 10.2766C16.2547 9.16322 16.8193 7.80093 16.8193 6.2271C16.8193 4.65382 16.2549 3.29134 15.1414 2.1776C14.0279 1.0644 12.6654 0.5 11.092 0.5C9.51825 0.5 8.156 1.0644 7.04266 2.17778C5.92931 3.29116 5.36475 4.65363 5.36475 6.2271C5.36475 7.80093 5.92931 9.1634 7.04266 10.2768C8.15636 11.39 9.51879 11.9546 11.092 11.9546ZM8.0281 3.16308C8.88239 2.30877 9.88453 1.89349 11.092 1.89349C12.2993 1.89349 13.3017 2.30877 14.1561 3.16308C15.0104 4.01757 15.4259 5.01992 15.4259 6.2271C15.4259 7.43464 15.0104 8.43681 14.1561 9.2913C13.3017 10.1458 12.2993 10.5611 11.092 10.5611C9.88489 10.5611 8.88275 10.1456 8.0281 9.2913C7.17364 8.43699 6.7582 7.43464 6.7582 6.2271C6.7582 5.01992 7.17364 4.01757 8.0281 3.16308Z" fill="#5D6374" stroke="#5D6374" stroke-width="0.2"/>
                  <path d="M21.1339 18.893C21.1012 18.4201 21.0352 17.9043 20.9379 17.3596C20.8397 16.8108 20.7133 16.292 20.562 15.8178C20.4055 15.3277 20.1931 14.8438 19.9301 14.38C19.6575 13.8986 19.3371 13.4794 18.9776 13.1345C18.6016 12.7736 18.1414 12.4835 17.6091 12.2719C17.0787 12.0614 16.4909 11.9547 15.8621 11.9547C15.6152 11.9547 15.3763 12.0564 14.9151 12.3576C14.6313 12.5433 14.2993 12.7581 13.9287 12.9956C13.6118 13.1982 13.1825 13.3879 12.6523 13.5598C12.135 13.7277 11.6098 13.8129 11.0912 13.8129C10.5729 13.8129 10.0477 13.7277 9.53001 13.5598C9.00034 13.3881 8.57088 13.1984 8.25455 12.9958C7.88747 12.7605 7.55527 12.5457 7.26718 12.3574C6.80634 12.0562 6.56753 11.9545 6.32059 11.9545C5.69163 11.9545 5.10401 12.0614 4.57378 12.2721C4.04189 12.4833 3.58143 12.7734 3.20512 13.1347C2.84561 13.4798 2.52522 13.8988 2.25281 14.38C1.99019 14.8438 1.77758 15.3276 1.62108 15.818C1.46993 16.2922 1.34351 16.8108 1.24533 17.3596C1.14788 17.9035 1.082 18.4195 1.04933 18.8935C1.01722 19.3569 1.00098 19.8393 1.00098 20.3266C1.00098 21.5934 1.40238 22.6189 2.19394 23.3752C2.97572 24.1216 4.00996 24.5 5.26808 24.5H16.9157C18.1735 24.5 19.2077 24.1216 19.9897 23.3752C20.7814 22.6194 21.1828 21.5935 21.1828 20.3264C21.1826 19.8374 21.1662 19.3551 21.1339 18.893ZM19.0123 22.3449C18.4957 22.8381 17.8099 23.0779 16.9155 23.0779H5.26808C4.37354 23.0779 3.68773 22.8381 3.17135 22.3451C2.66474 21.8613 2.41854 21.2008 2.41854 20.3266C2.41854 19.8718 2.43349 19.4229 2.46339 18.9918C2.49255 18.569 2.55216 18.1044 2.64056 17.6108C2.72786 17.1233 2.83896 16.6658 2.9711 16.2516C3.09789 15.8545 3.27082 15.4612 3.48527 15.0824C3.68995 14.7214 3.92544 14.4116 4.18529 14.1621C4.42835 13.9286 4.73471 13.7375 5.0957 13.5942C5.42956 13.4616 5.80476 13.3891 6.21208 13.3781C6.26172 13.4046 6.35012 13.4552 6.49334 13.5488C6.78475 13.7394 7.12064 13.9567 7.49197 14.1946C7.91054 14.4624 8.44981 14.7042 9.09409 14.9128C9.75277 15.1265 10.4245 15.235 11.0913 15.235C11.7581 15.235 12.4301 15.1265 13.0884 14.913C13.7333 14.704 14.2723 14.4624 14.6915 14.1943C15.0715 13.9506 15.3979 13.7395 15.6894 13.5488C15.8326 13.4553 15.921 13.4046 15.9706 13.3781C16.3781 13.3891 16.7533 13.4616 17.0874 13.5942C17.4482 13.7375 17.7545 13.9288 17.9976 14.1621C18.2574 14.4114 18.4929 14.7212 18.6976 15.0826C18.9122 15.4612 19.0854 15.8547 19.212 16.2515C19.3443 16.6662 19.4556 17.1235 19.5427 17.6106C19.6309 18.1052 19.6907 18.5699 19.7199 18.992V18.9924C19.7499 19.4218 19.7651 19.8705 19.7653 20.3266C19.7651 21.201 19.5189 21.8613 19.0123 22.3449Z" fill="#5D6374" stroke="#5D6374" stroke-width="0.2"/>
              </svg>
            </span>
                    <span class="mobile-toolbar-label">Account</span>
                </a>
                <a class="d-table-cell mobile-toolbar-item" href="checkout.html">
                    <span class="mobile-toolbar-icon mobile-cart-icon">
              <svg width="18" height="25" viewBox="0 0 22 25" fill="none"
                   xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.1704 23.9559L19.6264 7.01422C19.5843 6.55156 19.1908 6.19718 18.7194 6.19718H15.5355V4.78227C15.5355 2.14533 13.3583 0 10.6823 0C8.00628 0 5.82937 2.14533 5.82937 4.78227V6.19718H2.6433C2.17192 6.19718 1.77839 6.55156 1.73625 7.01422L0.186259 24.0225C0.163431 24.2735 0.248671 24.5223 0.421216 24.7082C0.593761 24.8941 0.837705 25 1.0933 25H20.2695C20.2702 25 20.2712 25 20.2719 25C20.775 25 21.1826 24.5982 21.1826 24.1027C21.1825 24.0528 21.1784 24.0036 21.1704 23.9559ZM7.65075 4.78227C7.65075 3.1349 9.01071 1.79465 10.6824 1.79465C12.3542 1.79465 13.7142 3.1349 13.7142 4.78227V6.19718H7.65075V4.78227ZM2.08948 23.2055L3.47591 7.99183H5.82937V9.59649C5.82937 10.0921 6.237 10.4938 6.74006 10.4938C7.24313 10.4938 7.65075 10.0921 7.65075 9.59649V7.99183H13.7142V9.59649C13.7142 10.0921 14.1219 10.4938 14.6249 10.4938C15.128 10.4938 15.5356 10.0921 15.5356 9.59649V7.99183H17.8869L19.2733 23.2055H2.08948Z" fill="#5D6374"/>
              </svg>
              <small class="badge bg-primary">12</small>
            </span>
                    <span class="mobile-toolbar-label">$265</span>
                </a>
            </div>
        </div>
        <div class="offcanvas-left-menu position-fixed">
            <div class="mobile-menu">
                <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
                <a href="#" class="d-inline-block mb-5"><img src="../assets/img/logo.png" alt="logo"></a>
                <nav class="mobile-menu-wrapper scrollbar">
                    <ul>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/baby-care.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Baby Care</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/cleaning.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Cleaning</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/bakery-biscuits.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Bakery & Biscuits</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/coffee-drinks.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Coffee & Drinks</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/beauty-health.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Beauty & Health</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/breakfast.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Breakfast</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/cold-drinks.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Cold Drinks</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/fresh-fruits.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Fresh Fruits</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/honey.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Honey</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/fresh-organic.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Fresh & Organic</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/jam-jelly.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Jam & Jelly</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/sports-fitness.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Sports & Fitness</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/sea-fish.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Sea Fish</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/pet-care.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Pet Care</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop-grid.html" class="d-flex align-items-center">
                                <div class="me-2 avatar-icon">
                                    <img src="../assets/img/category/meat.png" alt="vegetables" class="w-100 h-100 rounded-circle">
                                </div>
                                <span>Meat</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> <!--footer sectionfw-semibold
    
        <!--modal box-->

        <div class="modal fade" id="quickview_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                            <div class="row align-items-center g-4">
                                <div class="col-xl-6 align-self-end">
                                    <div class="quickview-double-slider">
                                        <div class="quickview-product-slider swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide text-center">
                                                    <img src="../assets/img/products/p-lg-1.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide text-center">
                                                    <img src="../assets/img/products/p-lg-2.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide text-center">
                                                    <img src="../assets/img/products/p-lg-3.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide text-center">
                                                    <img src="../assets/img/products/p-lg-4.png" alt="jam" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumbnail-slider swiper mt-80">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/img/products/thumb-sm-1.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/img/products/thumb-sm-2.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/img/products/thumb-sm-3.png" alt="jam" class="img-fluid">
                                                </div>
                                                <div class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/img/products/thumb-sm-4.png" alt="jam" class="img-fluid">
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
                                            <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                        </div>
                                        <p class="mb-3">Clicks-and-mortar "outside the bethinking. Interactively disseminate innovative intellectual relationships. </p>
                                        <ul class="d-flex flex-column gap-2">
                                            <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Natural ingredients</li>
                                            <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Tastes better with milk</li>
                                            <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Vitamins B2, B3, B5 and B6</li>
                                            <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Refrigerate for freshness</li>
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
                                            <a href="#" class="btn btn-secondary btn-md"><span class="me-2"><i class="fa-solid fa-cart-plus"></i></span>Add to Cart</a>
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
        </div> <!--modal box end-->

    </div>
            <div class="tt-short-info d-none d-md-none d-lg-none d-xl-block">
                <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
                <a href="#" class="logo-wrapper d-inline-block mb-5"><img src="../assets/img/logo.png" alt="logo" /></a>
                <div class="offcanvas-content">
                    <h4 class="mb-4">About Us</h4>
                    <p>
                        Explain to you how all this mistaken denouncing pleasure and praising pain was born and we will give you
                        a complete account of the system, and expound the actual teachings.
                    </p>
                    <p>
                        Mistaken denouncing pleasure and praising pain was born and we will give you complete account of the
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
                            <a href="javascript:void(0)">Home<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
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
                            <a href="javascript:void(0)">Products<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-grid-2.html">Shop Grid V2</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Blog<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
                            <ul>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-listing.html">Blog List</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Pages<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a>
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

<?php
include('../includes/footer.php');
?>