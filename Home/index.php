<?php
$pageName = "Home";
include('../includes/header.php');
include('../private/db.php');
?>

<div class="home1_banner_outer position-relative">
    <?php include('../includes/navbar.php'); ?>
    <!-- Banner -->
    <section class="banner-con position-relative">
        <?php
        //session_start();
        if (isset($_SESSION['message'])):
        ?>
            <div class="toast <?php echo $_SESSION['message']['type']; ?>" id="toast">
                <span class="toast-text"><?php echo $_SESSION['message']['text']; ?></span>
                <button class="toast-close" id="closeToast">×</button>
            </div>
        <?php
            unset($_SESSION['message']); // Clear the session message 
        endif;
        ?>
        <figure class="banner-lefttopimage mb-0">
            <img src="../assets/images/banner-lefttopimage.png" alt="image" class="img-fluid">
        </figure>
        <div class="container position-relative">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="banner_content" data-aos="fade-up">
                        <h3>Welcome to The</h3>
                        <h1><span>Sweet Haven</span> for Your Taste Buds!</h1>
                        <p>Where every bite is a celebration of tradition, taste, and timeless sweetness. Discover handcrafted delights made with love and the finest ingredients!</p>
                        <a href="about.html" class="text-decoration-none all_button">Browse Our Classic Flavors<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12"></div>
            </div>
            <figure class="banner-image mb-0" data-aos="zoom-in">
                <img src="../assets/images/banner-image.png" alt="image" class="img-fluid">
            </figure>
        </div>
    </section>
</div>
<!-- Relive -->
<section class="relive-con position-relative">
    <figure class="relive-rightbottomimage mb-0">
        <img src="../assets/images/relive-rightbottomimage.png" alt="image" class="img-fluid">
    </figure>
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-lg-left text-center order-lg-1 order-2">
                <div class="relive_wrapper" data-aos="fade-up">
                    <figure class="relive-circle mb-0">
                        <img src="../assets/images/relive-circle.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="relive-doted mb-0">
                        <img src="../assets/images/relive-doted.png" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                <div class="relive_content" data-aos="fade-up">
                    <h2>Crafting <span>Sweet Memories</span>, One Bite at a Time!</h2>
                    <p>Rediscover the joy of traditional sweets, prepared to perfection for you and your loved ones.</p>
                    <a href="about.html" class="text-decoration-none all_button">Explore Our Menu<i class="fa-solid fa-arrow-right"></i></a>
                    <figure class="relive-triangle mb-0">
                        <img src="../assets/images/relive-triangle.png" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        <figure class="relive-image mb-0" data-aos="zoom-in">
            <img src="../assets/images/relive-image.png" alt="image" class="img-fluid">
        </figure>
    </div>
</section>
<!-- Classic -->
<section class="classic-con position-relative">
    <figure class="classic-leftimage mb-0">
        <img src="../assets/images/classic-leftimage.png" alt="image" class="img-fluid">
    </figure>
    <figure class="classic-rightimage mb-0">
        <img src="../assets/images/classic-rightimage.png" alt="image" class="img-fluid">
    </figure>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="classic_content text-center" data-aos="fade-up">
                    <h2>Our <span>Classic</span> Favorites</h2>
                    <p>Check out our top products that our customers love.</p>
                </div>
            </div>
        </div>
        <div class="classic_wrapper" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $query = "SELECT * FROM product WHERE status='Normal'";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="item">
                                <div class="classic-box">
                                    <div class="classic_image_box box1">
                                        <figure class="mb-0">
                                            <img src="../common_images/product/<?php echo $row['product_image']; ?>" alt="image" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="classic_box_content">
                                        <div class="text_wrapper position-relative">
                                            <h6><?php echo $row['product_name']; ?></h6>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <p class="text-size-16"><?php echo $row['product_description']; ?></p>
                                        <div class="price_wrapper position-relative">
                                            <span class="dollar">Rs. <span class="counter"><?php echo $row['product_price']; ?></span></span>
                                            <a href="cart.html"><img src="../assets/images/cart.png" alt="image" class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories -->
<section class="categories-con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="categories_content text-center" data-aos="fade-up">
                    <h2>Explore Our <span>Categories</span></h2>
                    <p>Browse through our delectable categories and satisfy your sweet tooth.</p>
                </div>
            </div>
        </div>
        <div class="categories_wrapper" data-aos="fade-up">
            <div class="row">
                <?php
                $query = "SELECT * FROM category";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="categories-box">
                            <figure class="image mb-0">
                                <img src="./../common_images/category/<?php echo $row['catimg'] ?>" alt="image" class="img-fluid" style="height : 250px">
                            </figure>
                            <div class="content">
                                <h5 class="mb-0"><?php echo $row['catname'] ?></h5>
                                <a href="shop1.html"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Special -->
<section class="special-con position-relative">
    <figure class="special-rightimage mb-0">
        <img src="../assets/images/special-rightimage.png" alt="image" class="img-fluid">
    </figure>
    <div class="container position-relative">
        <figure class="special-triangle mb-0">
            <img src="../assets/images/special-triangle.png" alt="image" class="img-fluid">
        </figure>
        <figure class="special-doted mb-0">
            <img src="../assets/images/special-doted.png" alt="image" class="img-fluid">
        </figure>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="special_content" data-aos="fade-up">
                    <h2 class="text-white">Summer Special!</h2>
                    <p class="text-white">Buy One Sundae, Get One 50% Off!</p>
                    <div class="button">
                        <a href="special-offer.html" class="text-decoration-none all_button get_started">Get This Deal<i class="fa-solid fa-arrow-right"></i></a>
                        <span class="text-white">Use code: SUMMER50 at checkout.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                <div class="special_wrapper position-relative" data-aos="zoom-in">
                    <figure class="special-image mb-0">
                        <img src="../assets/images/special-image.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="special-dotedarrow mb-0">
                        <img src="../assets/images/special-dotedarrow.png" alt="image" class="img-fluid">
                    </figure>
                    <div class="circle-text">
                        <div class="content">
                            <span class="persent"><span class="">50</span>%</span>
                            <span class="text">OFF</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Seller -->
<section class="seller-con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="seller_content text-center" data-aos="fade-up">
                    <h2>Our <span>Best</span> Sellers</h2>
                    <p>Discover the favorites that keep our customers coming back for more.</p>
                </div>
            </div>
        </div>
        <div class="seller_wrapper" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $query = "SELECT * FROM product WHERE status='Best seller'";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="item">
                                <div class="seller-box">
                                    <div class="seller_image_box box1">
                                        <figure class="mb-0">
                                            <img src="../common_images/product/<?php echo $row['product_image'] ?>" alt="image" class="img-fluid">
                                        </figure>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="seller_box_content">
                                        <div class="text_wrapper position-relative">
                                            <h6><?php echo $row['product_name'] ?></h6>
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <span>4.9/5</span>
                                            </div>
                                        </div>
                                        <p class="text-size-16"><?php echo $row['product_description'] ?></p>
                                        <div class="price_wrapper position-relative">
                                            <span class="dollar">Rs. <span class="counter"><?php echo $row['product_price'] ?></span></span>
                                            <a href="cart.html"><img src="../assets/images/cart.png" alt="image" class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->
<section class="testimonial-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1 d-md-block d-none" data-aos="zoom-in">
                <div class="testimonial_wrapper">
                    <figure class="testimonial-image1 image mb-0 position-absolute">
                        <img src="../assets/images/testimonial-image1.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image2 image mb-0 position-absolute">
                        <img src="../assets/images/testimonial-image2.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image3 image mb-0 position-absolute">
                        <img src="../assets/images/testimonial-image3.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image4 image mb-0 position-absolute">
                        <img src="../assets/images/testimonial-image4.png" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-12" data-aos="fade-up">
                <div class="testimonial_content_box position-relative">
                    <h2 class="col-lg-8 mx-auto">Hear from Our Happy <span>Sweet Lovers</span></h2>
                    <figure class="testimonial-quoteimage mb-0 position-absolute">
                        <img src="../assets/images/testimonial-quoteimage.png" alt="image" class="img-fluid">
                    </figure>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial_content">
                            <p class="paragraph">I’ve tried sweets from so many places, but nothing beats the taste and quality here. Each bite takes me back to my childhood. Truly a gem!</p>
                            <span class="name">Rina K.</span>
                            <span class="review">Happy Customer</span>
                            <ul class="list-unstyled mb-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_content">
                            <p class="paragraph">Every time I visit, it’s a new experience. The variety is amazing, and I’m always excited to try something new. You can taste the love and tradition in every sweet!</p>
                            <span class="name">Vikram P.</span>
                            <span class="review">Happy Customer</span>
                            <ul class="list-unstyled mb-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_content">
                            <p class="paragraph">We always order from here for special occasions. The sweets are always fresh, delicious, and beautifully presented. Highly recommend it to anyone with a sweet tooth!</p>
                            <span class="name">Nina J.</span>
                            <span class="review">Happy Customer</span>
                            <ul class="list-unstyled mb-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-1 d-md-block d-none" data-aos="zoom-in">
                <div class="testimonial_wrapper">
                    <figure class="testimonial-image5 image mb-0 position-absolute">
                        <img src="../assets/images/testimonial-image5.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image6 image mb-0 position-absolute">
                        <img src="../assets/images/testimonial-image6.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image7 image mb-0 position-absolute">
                        <img src="../assets/images/testimonial-image7.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image8 image mb-0 position-absolute">
                        <img src="../assets/images/testimonial-image8.png" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../includes/footer.php');
include('../includes/script.php');
?>