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
                    <h2 class="mb-2 text-center">Shop Layout</h2>
                    <nav>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item fw-bold" aria-current="page"><a href="./index.php">Home</a></li>
                            <li class="breadcrumb-item fw-bold" aria-current="page">Pages</li>
                            <li class="breadcrumb-item fw-bold" aria-current="page">Products</li>
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
                        <div class="listing-top-right text-end d-inline-flex align-items-center gap-3 flex-wrap">
                        <div class="sidebar-widget search-widget bg-white py-5 px-4">
                                <div class="widget-title d-flex">
                                    <h6 class="mb-0 flex-shrink-0">Search Now</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <form class="search-form d-flex align-items-center mt-4" onsubmit="return false;">
                                    <input type="text" id="search-input" placeholder="Search..." onkeyup="filterProducts()">
                                    <button type="submit" class="submit-icon-btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 justify-content-center" id="product-container">
                        <?php 
                            foreach($products as $product){      
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-10 product-card" data-name="<?= strtolower($product['product_name']); ?>">
                                    <div class="vertical-product-card rounded-2 position-relative border-0 bg-white bg-white">
                                        <div class="thumbnail position-relative text-center p-4">
                                            <img src="../common_images/product/<?= $product['product_image']; ?>" alt="apple" style="height: 250px;" class="img-fluid">
                                            <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                                <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                                <a href="#quickview_modal" 
                                                    data-bs-toggle="modal" 
                                                    class="rounded-btn quick-view-btn" 
                                                    data-id="<?= $product['product_id']; ?>"
                                                    data-name="<?= $product['product_name']; ?>"
                                                    data-price="<?= $product['product_price']; ?>"
                                                    data-image="../common_images/product/<?= $product['product_image']; ?>"
                                                    data-description="<?= $product['product_description']; ?>"
                                                    data-qty="<?= $product['product_qty']; ?>">
                                                    <i class="fa-regular fa-eye"></i>
                                                    </a>
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
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

function filterProducts() {
    let input = document.getElementById("search-input").value.toLowerCase();
    let products = document.querySelectorAll(".product-card");
    
    products.forEach(product => {
        let name = product.getAttribute("data-name");
        if (name.includes(input)) {
            product.style.display = "block";
        } else {
            product.style.display = "none";
        }
    });
}
</script>

<!--shop grid section end-->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const quickViewButtons = document.querySelectorAll('.quick-view-btn');
        
        quickViewButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Fetch data from the clicked button
                const productId = this.getAttribute('data-id');
                const productName = this.getAttribute('data-name');
                const productPrice = this.getAttribute('data-price');
                const productImage = this.getAttribute('data-image');
                const productDescription = this.getAttribute('data-description');
                const productQty = this.getAttribute('data-qty');
                // Populate the modal fields
                document.querySelector('#quickview_modal .product-info h4').textContent = productName;
                document.querySelector('#quickview_modal .product-info .fw-bold').textContent = `₹ ${productPrice}`;
                document.querySelector('#quickview_modal .product-info p').textContent = productDescription;
                document.querySelector('#quickview_modal .quickview-product-slider img').setAttribute('src', productImage);
                document.querySelector('#quickview_modal .product-radio-btn label').textContent = productQty;

                document.querySelector('#quickview_modal .form-inputs #pid').value = productId;
                document.querySelector('#quickview_modal .form-inputs #pprice').value = productPrice;
                document.querySelector('#quickview_modal .form-inputs #pqty').value = productQty;
            });
        });
    });
</script>

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
                                            <img src="" alt="jam" class="img-fluid" style="height: 400px; width:300px;">
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
                                </div>
                                <div class="widget-title d-flex mt-4">
                                    <h6 class="mb-1 flex-shrink-0">Description</h6>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <p class="mb-3"></p>
                                <h6 class="fs-md mb-2 mt-3">Weight:</h6>
                                <ul class="product-radio-btn mb-4 d-flex align-items-center gap-2">
                                    <li>
                                        <input type="radio" name="weight" value="250g" checked>
                                        <label></label>
                                    </li>
                                </ul>
                                <div class="d-flex align-items-center gap-4 flex-wrap form-inputs">
                                    <form method="post" action="../handler/add_cart.php">
                                        <input type="hidden" id="pid" name="product_id">
                                        <input type="hidden" id="pprice" name="product_price">
                                        <input type="hidden" id="pqty" name="product_qty">
                                        <button type="submit" class="btn btn-secondary d-block btn-md rounded-1 w-100" name="addcartbtn"><span class="me-2"><i class="fa-solid fa-cart-plus"></i></span>Add to Cart</button>
                                    </form>
                                    <!-- <a href="#" class="btn btn-secondary btn-md"><span class="me-2"><i class="fa-solid fa-cart-plus"></i></span>Add to Cart</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('../includes/footer.php');
?>