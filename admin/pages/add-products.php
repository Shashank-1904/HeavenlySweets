<?php
include('./../includes/header.php');

// Fetch categories from the database
// Assuming a database connection is already established
$query = "SELECT catid, catname FROM category";
$result = mysqli_query($conn, $query);

$catdata = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $catdata[] = $row;
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (isset($_SESSION['message'])): ?>
        <div class="toast <?php echo $_SESSION['message']['type']; ?>" id="toast">
            <span class="toast-text"><?php echo $_SESSION['message']['text']; ?></span>
            <button class="toast-close" id="closeToast">×</button>
        </div>
        <?php unset($_SESSION['message']); // Clear the session message ?>
    <?php endif; ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Products</h1>
    </div>

    <div class="container-fluid col-2"></div>
    <div class="container-fluid col-8">
        <br>
        <form action="../handler/add_product_handle.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name"
                       name="product_name" placeholder="Enter product Name" required>
            </div>
            <div class="form-group">
                <label for="catid">Select Category</label>
                <select class="form-control" name="catid" required>
                    <option value="" disabled selected>Select Category</option>
                    <?php
                    if (!empty($catdata)) {
                        foreach ($catdata as $row) {
                            echo "<option value=\"{$row['catid']}\">{$row['catname']}</option>";
                        }
                    } else {
                        echo "<option value=\"\" disabled>No Categories Available</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="product_description">Product Description</label>
                <textarea type="text" class="form-control" id="product_description" name="product_description" placeholder="Enter Product Description" required></textarea>
            </div>
            <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="file" class="form-control" id="product_image" name="product_image" required />
            </div>
            <div class="form-group">
                <label for="product_qty">Product Quantity</label>
                <input type="number" class="form-control" id="product_qty" name="product_qty" placeholder="Enter Quantity" required>
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="number" step="0.01" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="" disabled selected>Select Status</option>
                    <option value="Normal">Normal</option>
                    <option value="Best seller">Best seller</option>
                    <option value="New arrived">New arrived</option>
                </select>
            </div>
            <div class="form-group">
                <label for="product_rating">Product Rating</label>
                <input type="number" step="0.1" max="5" class="form-control" id="product_rating" name="product_rating" placeholder="Enter Product Rating" required>
            </div>

            <center>
                <button type="submit" class="btn btn-success" name="addprodbtn">Add Product</button>
            </center>
        </form>
    </div>
    <div class="container-fluid col-2"></div>
</div>
<!-- /.container-fluid -->

<?php
include('./../includes/footer.php');
?>
