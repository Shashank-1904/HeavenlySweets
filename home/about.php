<?php
$pageName = "Home";
include('../includes/header.php');
include('../includes/navbar.php');
include('../private/db.php');
// fetch product start
$proquery = "select * from product";
$proresult = mysqli_query($conn,$proquery);
if(!$proquery){
    echo"Wrong Input";
}
$products = mysqli_fetch_all($proresult,MYSQLI_ASSOC);

$query = "select * from category";
$result = mysqli_query($conn,$query);
if(!$result){
    echo"Wrong Query";
}
$categories = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>

<?php if (isset($_SESSION['message'])): ?>
            <div class="toast <?php echo $_SESSION['message']['type']; ?>" id="toast">
                <span class="toast-text"><?php echo $_SESSION['message']['text']; ?></span>
                <button class="toast-close" id="closeToast">×</button>
            </div>
            <?php unset($_SESSION['message']); // Clear the session message ?>
        <?php endif;?>
<!--breadcrumb section start-->
<div class="gstore-breadcrumb position-relative z-1 overflow-hidden mt--50">
<img src="../assets/img/shapes/bg-shape-6.png" alt="bg-shape" class="position-absolute start-0 z--1 w-100 bg-shape">
    <img src="../assets/img/shapes/candy (1).png" alt="pata" class="position-absolute pata-xs z--1 vector-shape">
    <img src="../assets/img/shapes/candy.png" alt="onion" class="position-absolute z--1 onion start-0 top-0 vector-shape h-15">
    <img src="../assets/img/shapes/laddu.png" alt="frame circle" class="position-absolute z--1 frame-circle vector-shape h-17">
    <img src="../assets/img/shapes/leaf.svg" alt="leaf" class="position-absolute z--1 leaf vector-shape">
    <img src="../assets/img/shapes/cupcake.png" alt="garlic" class="position-absolute z--1 garlic vector-shape h-10">
    <img src="../assets/img/shapes/cake (2).png" alt="roll" class="position-absolute z--1 roll vector-shape h-10">
    <img src="../assets/img/shapes/cake.png" alt="roll" class="position-absolute z--1 roll-2 vector-shape">
    <img src="../assets/img/shapes/candy (1).png" alt="roll" class="position-absolute z--1 pata-xs-2 vector-shape">
    <img src="../assets/img/shapes/tomato-half.svg" alt="tomato" class="position-absolute z--1 tomato-half vector-shape">
    <img src="../assets/img/shapes/donut.png" alt="tomato" class="position-absolute z--1 tomato-slice vector-shape h-15">
    <img src="../assets/img/shapes/candies.png" alt="tomato" class="position-absolute z--1 cauliflower vector-shape w-15">
    <img src="../assets/img/shapes/leaf-gray.png" alt="tomato" class="position-absolute z--1 leaf-gray vector-shape">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="mb-2 text-center">About Us</h2>
                    <nav>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item fw-semibold" aria-current="page"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item fw-semibold" aria-current="page">Pages</li>
                            <li class="breadcrumb-item fw-semibold" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb section end-->

<!--feature section start-->
<section class="about-section position-relative mt-5">
    <img src="../assets/img/shapes/bg-shape-5.png" alt="bg shape" class="position-absolute start-0 bottom-0 z--1 w-100">
    <img src="../assets/img/shapes/cake (2).png" alt="roll" class="position-absolute roll-color z--1" data-parallax='{"y": -50}'>
    <img src="../assets/img/shapes/cake.png" alt="roll" class="position-absolute roll-color-curve z--1" data-parallax='{"y": 50}'>
    <img src="../assets/img/shapes/onion-color.png" alt="onion" class="position-absolute onion-color z--1" data-parallax='{"x": -30}'>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center">
                    <h2 class="mb-3">Our Working Ability</h2>
                    <p class="mb-0">At HeavenlySweets, our working ability is rooted in passion, precision, and dedication. We take pride in delivering the finest sweets by combining traditional craftsmanship with modern techniques.</p>
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
                        <h3 class="mb-1"><span class="counter"><?php echo count($products); ?></span>+</h3>
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
                        <h3 class="mb-1"><span class="counter"><?php echo count($products); ?></span>k+</h3>
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
                        <h3 class="mb-1"><span class="counter"><?php echo count($categories); ?></span>+</h3>
                        <h6 class="mb-0 text-gray fs-sm">Total Categories</h6>
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

<!--about section start-->
<section class="pt-5 ab-about-section position-relative z-1 overflow-hidden">
    <img src="../assets/img/shapes/mango.png" alt="mango" class="position-absolute mango z--1">
    <div class="container">
        <div class="row g-5 g-xl-4 align-items-center">
            <div class="col-xl-6">
                <div class="ab-left position-relative">
                    <img src="../assets/img/about/ab-1.png" alt="image" class="img-fluid">
                    <!-- <div class="text-end">
                        <div class="ab-quote p-4 text-start">
                            <h4 class="mb-0 fw-normal text-white">“Assertively target market Lorem ipsum is simply free consectetur notted elit sed do eiusmod” <span class="fs-md fw-medium position-relative">George Scholll</span></h4>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ab-about-right">
                    <div class="subtitle d-flex align-items-center gap-3 flex-wrap">
                        <span class="gshop-subtitle">Providing 100% Pure and Authentic Sweets</span>
                        <span>
                            <svg width="78" height="16" viewBox="0 0 78 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.0138875" y1="7.0001" x2="72.0139" y2="8.0001" stroke="#FF7C08" stroke-width="2" />
                                <path d="M78 8L66 14.9282L66 1.0718L78 8Z" fill="#FF7C08" />
                            </svg>
                        </span>
                    </div>
                    <h2 class="mb-4">Stay Sweet &<br> Enjoy Freshly Made Sweets</h2>
                    <p class="mb-8">We are dedicated to delivering quality, freshness, and authenticity in every bite, ensuring that our customers experience pure delight. We aspire to be the go-to destination for quality confections, spreading joy and building lasting relationships through our passion for exceptional sweets.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="image-box py-6 px-4 image-box-border">
                                <div class="icon position-relative">
                                    <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                </div>
                                <h4 class="mt-3">Our Mission</h4>
                                <p class="mb-0">At HeavenlySweets, our mission is to create unforgettable moments of happiness by offering premium, handcrafted sweets that combine traditional recipes with modern flavors.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-box py-6 px-4 image-box-border">
                                <div class="icon position-relative">
                                    <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                </div>
                                <h4 class="mt-3">Our Vision</h4>
                                <p class="mb-0">Our vision at HeavenlySweets is to become a symbol of sweetness and celebration in every home.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!--about section end-->

<!--about us section-->
<section class="pt-120 about-us-section pb-120">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-xl-5">
                <div class="about-us-left position-relative">
                    <img src="../assets/img/about/ab-2.png" alt="not found" class="img-fluid">
                    <div class="exp-box p-3 bg-white rounded-circle position-absolute">
                        <div class="bg-secondary w-100 h-100 rounded-circle d-flex align-items-center justify-content-center flex-column">
                            <h2 class="text-white">5+</h2>
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
                                    <line x1="-6.99382e-08" y1="5.2" x2="52" y2="5.2" stroke="#FF7C08" stroke-width="1.6" />
                                    <path d="M58 5L50.5 9.33013L50.5 0.669872L58 5Z" fill="#FF7C08" />
                                </svg>
                            </span>
                        </div>
                        <h2 class="mb-3">We do not Buy from the Open Market</h2>
                        <p class="mb-0">At HeavenlySweets, we offer more than just sweets – we deliver an experience of pure joy and indulgence</p>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                <span class="icon-wrapper position-relative flex-shrink-0">
                                    <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                </span>
                                <div class="content-right">
                                    <h5 class="mb-3">Uncompromising Quality</h5>
                                    <p class="mb-0">We use only the finest, freshest ingredients to ensure every sweet is crafted to perfection. From premium milk and sugar to handpicked nuts and fruits, quality is at the heart of everything we do.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                <span class="icon-wrapper position-relative flex-shrink-0">
                                    <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                </span>
                                <div class="content-right">
                                    <h5 class="mb-3">Authentic & Innovative Creations</h5>
                                    <p class="mb-0">Our sweets are a perfect blend of tradition and innovation. While we stay true to classic recipes passed down through generations, we also love to experiment and introduce new flavors and styles, ensuring there's always something new to delight your taste buds.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                <span class="icon-wrapper position-relative flex-shrink-0">
                                    <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                </span>
                                <div class="content-right">
                                    <h5 class="mb-3">Freshness Guaranteed</h5>
                                    <p class="mb-0">We believe that sweets should always be fresh. That's why we prepare our treats in small batches daily, ensuring that you get only the freshest, most delicious sweets every time you visit us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="horizontal-icon-box d-flex align-items-center gap-4 bg-white rounded p-4 hover-shadow flex-wrap flex-xxl-nowrap">
                                <span class="icon-wrapper position-relative flex-shrink-0">
                                    <img src="../assets/img/icons/hand-icon.svg" alt="hand icon" class="img-fluid">
                                </span>
                                <div class="content-right">
                                    <h5 class="mb-3">Customer Satisfaction</h5>
                                    <p class="mb-0">Our customers are at the heart of our business. We listen to your preferences and constantly work to meet your expectations. Whether you're ordering for a special occasion or just treating yourself, we're committed to making every experience with us exceptional.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!--about us section end-->


<?php
include('../includes/footer.php');
?>