<?php
$pageName = "Home";
include('../includes/header.php');
include('../includes/navbar.php');
include('../private/db.php');

$query = "SELECT c.*, COUNT(p.product_id) AS total_products FROM category c LEFT JOIN product p ON c.catid = p.catid GROUP BY c.catid";
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
?>
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
                    <h2 class="mb-2 text-center">Shop Layout</h2>
                    <nav>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item fw-bold" aria-current="page"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item fw-bold" aria-current="page">Page</li>
                            <li class="breadcrumb-item fw-bold" aria-current="page">Shop Grid</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
<!--breadcrumb section end-->

<!--shop grid section start-->
<section class="gshop-gshop-grid ptb-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-3">
                <div class="gshop-sidebar bg-white rounded-2 overflow-hidden">
                    <div class="sidebar-widget category-widget bg-white py-5 px-4 border-top">
                        <div class="widget-title d-flex">
                            <h6 class="mb-0 flex-shrink-0">Categories</h6>
                            <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                        </div>
                        <ul class="widget-nav mt-4">
                            <li><a href="#" class="d-flex justify-content-between align-items-center">All<span class="fw-bold fs-xs total-count"><?php echo count($categories); ?></span></a></li>

                        <?php
                            
                            foreach($categories as $category){      
                            ?>
                                <li><a href="#" class="d-flex justify-content-between align-items-center"><?= $category['catname']?><span class="fw-bold fs-xs total-count"><?= $category['total_products']?></span></a></li>
                            <?php 
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="shop-grid">
                    <div class="listing-top d-flex align-items-center justify-content-between flex-wrap gap-3 bg-white rounded-2 px-4 py-5 mb-6">
                        <p class="mb-0 fw-bold">Showing 1-12 of 45 results</p>
                        <div class="listing-top-right text-end d-inline-flex align-items-center gap-3 flex-wrap">
                            <div class="number-count-filter d-flex align-items-center gap-3">
                                <label class="fw-bold fs-xs text-dark flex-shrink-0">Show:</label>
                                <input type="number" value="16">
                            </div>
                            <div class="select-filter d-inline-flex align-items-center gap-3">
                                <label class="fw-bold fs-xs text-dark flex-shrink-0">Sort by:</label>
                                <select class="form-select fs-xxs fw-medium theme-select select-sm">
                                    <option>News First</option>
                                    <option>Best Selling</option>
                                    <option>Best Rated</option>
                                </select>
                            </div>
                            <a href="#" class="grid-btn active">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.97196 0H1.37831C0.706579 0 0.160156 0.546422 0.160156 1.21815V5.8118C0.160156 6.48353 0.706579 7.02996 1.37831 7.02996H5.97196C6.64369 7.02996 7.19011 6.48353 7.19011 5.8118V1.21815C7.19 0.546422 6.64369 0 5.97196 0Z" fill="#FF7C08" />
                                    <path d="M14.9407 0H10.3471C9.67533 0 9.12891 0.546422 9.12891 1.21815V5.8118C9.12891 6.48353 9.67533 7.02996 10.3471 7.02996H14.9407C15.6124 7.02996 16.1589 6.48353 16.1589 5.8118V1.21815C16.1589 0.546422 15.6124 0 14.9407 0Z" fill="#FF7C08" />
                                    <path d="M5.97196 8.96973H1.37831C0.706579 8.96973 0.160156 9.51609 0.160156 10.1878V14.7815C0.160156 15.4532 0.706579 15.9996 1.37831 15.9996H5.97196C6.64369 15.9996 7.19011 15.4532 7.19011 14.7815V10.1878C7.19 9.51609 6.64369 8.96973 5.97196 8.96973Z" fill="#FF7C08" />
                                    <path d="M14.9407 8.96973H10.3471C9.67533 8.96973 9.12891 9.51615 9.12891 10.1879V14.7815C9.12891 15.4533 9.67533 15.9997 10.3471 15.9997H14.9407C15.6124 15.9996 16.1589 15.4532 16.1589 14.7815V10.1878C16.1589 9.51609 15.6124 8.96973 14.9407 8.96973Z" fill="#FF7C08" />
                                </svg>
                            </a>
                            <a href="#" class="grid-btn">
                                <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.31378 0C1.12426 0 0.160156 0.9641 0.160156 2.15359C0.160156 3.34309 1.12426 4.30722 2.31378 4.30722C3.50328 4.30722 4.46738 3.34312 4.46738 2.15359C4.46738 0.964066 3.50328 0 2.31378 0ZM2.31378 5.74293C1.12426 5.74293 0.160156 6.70706 0.160156 7.89656C0.160156 9.08608 1.12426 10.0502 2.31378 10.0502C3.50328 10.0502 4.46738 9.08608 4.46738 7.89656C4.46738 6.70706 3.50328 5.74293 2.31378 5.74293ZM2.31378 11.4859C1.12426 11.4859 0.160156 12.45 0.160156 13.6395C0.160156 14.829 1.12426 15.7931 2.31378 15.7931C3.50328 15.7931 4.46738 14.829 4.46738 13.6395C4.46738 12.45 3.50328 11.4859 2.31378 11.4859ZM8.05671 3.58933H19.5426C20.3358 3.58933 20.9783 2.94683 20.9783 2.15359C20.9783 1.36036 20.3358 0.717853 19.5426 0.717853H8.05671C7.26348 0.717853 6.62097 1.36036 6.62097 2.15359C6.62097 2.94683 7.26348 3.58933 8.05671 3.58933ZM19.5426 6.46082H8.05671C7.26348 6.46082 6.62097 7.10332 6.62097 7.89656C6.62097 8.68979 7.26348 9.3323 8.05671 9.3323H19.5426C20.3358 9.3323 20.9783 8.68979 20.9783 7.89656C20.9783 7.10332 20.3358 6.46082 19.5426 6.46082ZM19.5426 12.2038H8.05671C7.26348 12.2038 6.62097 12.8463 6.62097 13.6395C6.62097 14.4327 7.26348 15.0752 8.05671 15.0752H19.5426C20.3358 15.0752 20.9783 14.4327 20.9783 13.6395C20.9783 12.8463 20.3358 12.2038 19.5426 12.2038Z" fill="#5D6374" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <?php 
                            foreach($products as $product){      
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-10">
                                    <div class="vertical-product-card rounded-2 position-relative border-0 bg-white bg-white">
                                        <!-- <span class="offer-badge text-white fw-bold fs-xxs bg-danger position-absolute start-0 top-0">-12% OFF</span> -->
                                        <div class="thumbnail position-relative text-center p-4">
                                            <img src="../common_images/product/<?= $product['product_image']; ?>" alt="apple" style="height: 250px;" class="img-fluid">
                                            <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                                <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <a href="#" class="card-title fw-bold d-block mb-2 tt-line-clamp tt-clamp-2"><?= $product['product_name']; ?></a>
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
                                            <h6 class="price text-danger mb-4">₹ <?= $product['product_price']; ?> / <?= $product['product_qty']; ?></h6> 
                                            <form method="post" action="../handler/add_cart.php">
                                                <input type="hidden" name="product_id" value="<?= $product['product_id']?>">
                                                <input type="hidden" name="product_price" value="<?= $product['product_price']?>">
                                                <input type="hidden" name="product_qty" value="<?= $product['product_qty']?>">
                                                <button type="submit" class="btn btn-secondary d-block btn-md rounded-1 w-100" name="addcartbtn">Add to Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                            }
                        ?>
                    </div>
                    <ul class="template-pagination d-flex align-items-center mt-6">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop grid section end-->

<?php
include('../includes/footer.php');
?>