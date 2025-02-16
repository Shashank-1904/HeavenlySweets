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
    <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Orders</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Order_ID</th>
                            <th>User_ID</th>
                            <th>Payment Type</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total_price</th>
                            <th>Status</th>
                            <th>Placed On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Query to fetch all products along with their names
                            $query = "SELECT * FROM orders o JOIN productCart pc ON o.referenceID = pc.orderReference;";
                            $result = mysqli_query($conn, $query);

                            // Loop through and display products
                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
                        <tr>
                            <td><?php echo $row['order_id']; ?></td>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['payment_type']; ?></td>
                            <td><?php echo $row['product_price']; ?></td>
                            <td><?php echo $row['productqty']; ?></td>
                            <td><?php echo $row['total_price']; ?></td>
                            <td><?php echo $row['orderstatus']; ?></td>
                            <td><?php echo $row['ordercreated']; ?></td>

                            <td class="row mx-auto text-center">

                                <!-- Delete Product Form -->
                                <!-- ../handler/delete_product_handle.php -->
                                <form action="#" method="POST" class="mr-2">
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
                                    <button type="submit" class="btn btn-danger btn-circle" name="deleteproductbtn">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </form>

                                <!-- Edit Product Link -->
                                <!-- edit_products.php?product_id= -->
                                <!-- Edit Order Button -->
                                <a href="#" class="btn btn-primary btn-circle" data-toggle="modal"
                                    data-target="#editModal<?php echo $row['order_id']; ?>">
                                    <i class="fas fa-pen"></i>
                                </a>



                            </td>
                        </tr>

                        <!-- Bootstrap Modal -->
                        <div class="modal fade" id="editModal<?php echo $row['order_id']; ?>" tabindex="-1"
                            aria-labelledby="editModalLabel<?php echo $row['order_id']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Order ID - <?php echo $row['order_id']; ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../handler/update_order.php" method="POST" >
                                            <input type="hidden" name="order_id"
                                                value="<?php echo $row['order_id']; ?>">

                                            <div class="form-group">
                                                <label>Order Status</label>
                                                <select class="form-control" name="orderstatus">
                                                    <option value="Pending"
                                                        <?php if ($row['orderstatus'] == "Pending") echo "selected"; ?>>
                                                        Pending</option>
                                                    <option value="Shipped"
                                                        <?php if ($row['orderstatus'] == "Shipped") echo "selected"; ?>>
                                                        Shipped</option>
                                                    <option value="Delivered"
                                                        <?php if ($row['orderstatus'] == "Delivered") echo "selected"; ?>>
                                                        Delivered</option>
                                                    <option value="Cancelled"
                                                        <?php if ($row['orderstatus'] == "Cancelled") echo "selected"; ?>>
                                                        Cancelled</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-success" name="updateOrder">Update
                                                Order</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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