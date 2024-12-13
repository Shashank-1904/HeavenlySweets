<?php
include('./../includes/header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (isset($_SESSION['message'])): ?>
        <div class="toast <?php echo $_SESSION['message']['type']; ?>" id="toast">
            <span class="toast-text"><?php echo $_SESSION['message']['text']; ?></span>
            <button class="toast-close" id="closeToast">×</button>
        </div>
        <?php unset($_SESSION['message']); 
         ?>
    <?php endif; ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Products</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Query to fetch all products along with their names
                            $query = "SELECT p.product_id, p.product_name, p.product_description, p.product_image, p.product_qty, p.product_price, p.product_rating, c.catname 
                                      FROM product p
                                      JOIN category c ON p.catid = c.catid";
                            $result = mysqli_query($conn, $query);

                            // Loop through and display products
                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                <img src="./../../common_images/product/<?php echo $row['product_image'];?>" class="rounded" alt="<?php echo $row['product_name'];?>" height="150" width="200">
                                            </div>
                                        </td>
                                        <td><?php echo $row['product_name']; ?></td>
                                        <td><?php echo $row['product_description']; ?></td>
                                        <td><?php echo $row['catname']; ?></td>
                                        <td><?php echo 'Rs. ' . number_format($row['product_price'], 2); ?></td>
                                        <td class="row mx-auto text-center">
                                            
                                            <!-- Delete Product Form -->
                                            <form action="../handler/delete_product_handle.php" method="POST" class="mr-2">
                                                <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
                                                <button type="submit" class="btn btn-danger btn-circle" name="deleteproductbtn">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>

                                            <!-- Edit Product Link -->
                                            <a href="edit_products.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-primary btn-circle">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php
include('./../includes/footer.php');
?>
