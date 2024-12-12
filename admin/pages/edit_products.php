<?php
include('./../includes/header.php');
require('../private/db.php');

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
} elseif (isset($_SESSION['message']) && $_SESSION['message']['type'] === 'errorr') {
    $product_id = $_SESSION['message']['id'];
}

// Fetch product details
$query = "SELECT * FROM product WHERE product_id='$product_id'";
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);

// Fetch categories
$categoryQuery = "SELECT * FROM category";
$categoryResult = mysqli_query($conn, $categoryQuery);
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (isset($_SESSION['message'])): ?>
        <div class="toast <?php echo $_SESSION['message']['type']; ?>" id="toast">
            <span class="toast-text"><?php echo $_SESSION['message']['text']; ?></span>
            <button class="toast-close" id="closeToast">×</button>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
    </div>

    <div class="container-fluid col-8">
        <form action="../handler/edit_product_handle.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $product_id; ?>" name="product_id"/>
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" 
                       placeholder="Enter Product Name" value="<?php echo $product['product_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="product_description">Product Description</label>
                <textarea type="text" class="form-control" id="product_description" 
                          name="product_description" placeholder="Enter Product Description" required>
                    <?php echo $product['product_description']; ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="file" class="form-control" id="product_image" name="product_image" />
                <small>Current Image: <?php echo $product['product_image']; ?></small>
            </div>
            <div class="form-group">
                <label for="product_qty">Product Quantity</label>
                <input type="text" class="form-control" id="product_qty" name="product_qty" 
                       value="<?php echo $product['product_qty']; ?>" required>
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="text" class="form-control" id="product_price" name="product_price" 
                       value="<?php echo $product['product_price']; ?>" required>
            </div>
            <div class="form-group">
                <label for="product_rating">Product Rating</label>
                <input type="text" class="form-control" id="product_rating" name="product_rating" 
                       value="<?php echo $product['product_rating']; ?>" required>
            </div>
            <div class="form-group">
                <label for="catid">Category</label>
                <select class="form-control" id="catid" name="catid" required>
                    <?php while ($category = mysqli_fetch_assoc($categoryResult)): ?>
                        <option value="<?php echo $category['catid']; ?>" 
                            <?php echo ($product['catid'] == $category['catid']) ? 'selected' : ''; ?>>
                            <?php echo $category['catname']; ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <center><button type="submit" class="btn btn-success" name="editproductbtn">Update Product</button></center>
        </form>
    </div>
</div>

<?php include('./../includes/footer.php'); ?>
