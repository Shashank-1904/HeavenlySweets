<?php
include('../private/db.php');

$search = isset($_POST['search']) ? trim($_POST['search']) : "";

// Fetch products based on search
$query = "SELECT * FROM product  WHERE product_name LIKE ?";
$stmt = $conn->prepare($query);
$searchTerm = "%$search%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

// Display products
if ($result->num_rows > 0) {
    while ($product = $result->fetch_assoc()) {
        echo '<div class="col-lg-4 col-md-6 col-sm-10 product-item">
            <div class="vertical-product-card rounded-2 position-relative border-0 bg-white">
                <div class="thumbnail position-relative text-center p-4">
                    <img src="../common_images/product/' . $product['product_image'] . '" alt="' . $product['product_name'] . '" style="height: 250px;" class="img-fluid">
                    <div class="product-btns position-absolute d-flex gap-2 flex-column">
                        <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                        <a href="#quickview_modal" data-bs-toggle="modal" class="rounded-btn quick-view-btn" 
                            data-id="' . $product['product_id'] . '" 
                            data-name="' . $product['product_name'] . '"
                            data-price="' . $product['product_price'] . '"
                            data-image="../common_images/product/' . $product['product_image'] . '"
                            data-description="' . $product['product_description'] . '"
                            data-qty="' . $product['product_qty'] . '">
                            <i class="fa-regular fa-eye"></i>
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <a href="#" class="card-title fw-bold d-block mb-2 tt-line-clamp tt-clamp-2">' . $product['product_name'] . '</a>
                    <h6 class="price text-danger mb-4">₹ ' . $product['product_price'] . ' / ' . $product['product_qty'] . '</h6>
                    <form method="post" action="../handler/add_cart.php">
                        <input type="hidden" name="product_id" value="' . $product['product_id'] . '">
                        <input type="hidden" name="product_price" value="' . $product['product_price'] . '">
                        <input type="hidden" name="product_qty" value="' . $product['product_qty'] . '">
                        <button type="submit" class="btn btn-secondary d-block btn-md rounded-1 w-100" name="addcartbtn">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>';
    }
} else {
    echo "<p class='text-center w-100'>No products found!</p>";
}
?>
