<?php
$pageName = "Home";
$totalprice = 0;

include('../includes/header.php');
include('../includes/navbar.php');

include('../private/db.php');
if (isset($_SESSION['userid'])) {
    $user_id = $_SESSION['userid'];
    $query = "SELECT * FROM productCart c JOIN product p ON c.product_id = p.product_id WHERE c.user_id='$user_id' AND orderReference is NULL";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Wrong Query";
    }
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $count = $result->num_rows;
} else {
    echo "<script> window.location.replace('../Home/index.php'); </script>";
}

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
    <!-- Breadcrumb images here -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="mb-2 text-center">Shopping Cart</h2>
                    <nav>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item fw-bold" aria-current="page"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item fw-bold" aria-current="page">Page</li>
                            <li class="breadcrumb-item fw-bold" aria-current="page">Cart Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb section end-->

<!--cart section start-->
<section class="cart-section ptb-120">
    <div class="container">
        <div class="rounded-2 overflow-hidden">
            <table class="cart-table w-100 mt-4 bg-white">
                <thead>
                    <th>Sr.No.</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    foreach ($products as $product):
                        // Calculate total price for this product
                        $qtyarr = preg_split('/(?<=\d)(?=[a-zA-Z])/', $product['productqty']);
                        $productTotalPrice = $qtyarr[0] * $product['product_price'];
                        $totalprice += $productTotalPrice; // Add to subtotal
                    ?>
                        <form action="../handler/update_cart.php" method="post">
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td>
                                    <img src="../common_images/product/<?= $product['product_image'] ?>" alt="product-thumb" class="img-fluid h-1 w-50">
                                </td>
                                <td class="text-start product-title">
                                    <h6 class="mb-0"><?= htmlspecialchars($product['product_name']) ?></h6>
                                </td>
                                <td>
                                    <div class="product-qty d-inline-flex align-items-center">
                                        <button type="button" class="decrease btn btn-sm btn-outline-secondary" onclick="adjustQuantity(this, -0.5, <?= $product['product_id'] ?>)">-</button>
                                        <input type="text" class="qty-input text-center mx-2" id="qty_<?= $product['product_id'] ?>" name="qtyvalue" value="<?= $qtyarr[0] ?>" step="0.5">
                                        <button type="button" class="increase btn btn-sm btn-outline-secondary" onclick="adjustQuantity(this, 0.5, <?= $product['product_id'] ?>)">+</button>
                                    </div>
                                    <?php echo $qtyarr[1]; ?>
                                </td>
                                <td>
                                    ₹<span class="unit-price"><?= $product['product_price'] ?></span>
                                </td>
                                <td>
                                    ₹<span class="total-price"><?= number_format($productTotalPrice, 2) ?></span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                                        <input type="hidden" name="product_qty" id="qtychangevalue_<?= $product['product_id'] ?>" value="<?= $qtyarr[0]; ?>">
                                        <input type="hidden" name="product_qty_unit" value="<?= $qtyarr[1]; ?>">
                                        <button type="submit" name="updatebtn" class="btn btn-primary btn-md rounded-1 me-2">Update</button>
                                        <button type="submit" name="deletebtn" class="btn btn-danger btn-md rounded-1">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    <?php $count++;
                    endforeach; ?>
                </tbody>
            </table>

            <script>
                function adjustQuantity(button, step, productId) {
                    // Get the input field and other relevant elements using the productId
                    const input = document.getElementById('qty_' + productId);
                    const change = document.getElementById('qtychangevalue_' + productId);
                    const unitPriceElem = button.closest('tr').querySelector('.unit-price');
                    const totalPriceElem = button.closest('tr').querySelector('.total-price');

                    // Parse current values
                    let currentValue = parseFloat(input.value) || 0;
                    const unitPrice = parseFloat(unitPriceElem.textContent) || 0;

                    // Adjust the quantity and ensure it doesn't go below 0
                    currentValue += step;
                    if (currentValue < 0) currentValue = 0;

                    // Update the input field and total price
                    input.value = currentValue.toFixed(1); // Keep one decimal place
                    change.value = currentValue.toFixed(1); // Keep one decimal place
                    totalPriceElem.textContent = (currentValue * unitPrice).toFixed(2); // Update total price
                }
            </script>


        </div>
        <div class="row g-4 justify-content-end">

            <div class="col-xl-5 ">
                <div class="cart-summery bg-white rounded-2 pt-4 pb-6 px-5 mt-4">
                    <table class="w-100">
                        <tr>
                            <td class="py-3">
                                <h5 class="mb-0 fw-medium">Subtotal</h5>
                            </td>
                            <td class="py-3">
                                <h5 class="mb-0 fw-semibold text-end">₹<?= number_format($totalprice, 2) ?></h5>
                            </td>
                        </tr>
                        <tr class="border-top">
                            <td class="py-3">
                                <h5 class="mb-0">Total</h5>
                            </td>
                            <td class="text-end py-3">
                                <h5 class="mb-0">₹<?= number_format($totalprice, 2) ?></h5>
                            </td>
                        </tr>
                    </table>
                    <p class="mb-5 mt-2">Shipping options will be updated during checkout.</p>
                    <div class="btns-group d-flex gap-3">
                        <button type="submit" class="btn btn-primary btn-md rounded-1"><a href="checkout.php" class="btn btn-primary btn-md rounded-1">Confirm Order</a> </button>
                        <button type="button" class="btn btn-outline-secondary border-secondary btn-md rounded-1">Continue Shopping</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--cart section end-->


<?php
include('../includes/footer.php');
?>