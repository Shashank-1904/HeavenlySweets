<?php
include('./../includes/header.php');
require('../private/db.php');


$query = "SELECT COUNT(*) AS total FROM product";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Wrong Query";
} else {
    $row = mysqli_fetch_assoc($result);
    $product_count = $row['total']; 
}

$ordersquery = "SELECT COUNT(*) AS total FROM orders";
$orderresult = mysqli_query($conn, $ordersquery);
if (!$orderresult) {
    echo "Wrong Query";
} else {
    $orderrow = mysqli_fetch_assoc($orderresult);
    $order_count = $orderrow['total']; 
}

$pendingordersquery = "SELECT COUNT(*) AS total FROM orders where orderstatus = 'Pending'";
$pendingorderresult = mysqli_query($conn, $pendingordersquery);
if (!$pendingorderresult) {
    echo "Wrong Query";
} else {
    $pendingorderrow = mysqli_fetch_assoc($pendingorderresult);
    $pendingOrder_count = $pendingorderrow['total']; 
}

$totalearningquery = "SELECT SUM(total_price) total FROM orders";
$totalearningresult = mysqli_query($conn, $totalearningquery);
if (!$totalearningresult) {
    echo "Wrong Query";
} else {
    $totalearningrow = mysqli_fetch_assoc($totalearningresult);
    $totalearning_count = $totalearningrow['total']; 
}


$ordquery = "SELECT DISTINCT *
FROM orders o
JOIN users u ON o.user_id = u.useruid
ORDER BY o.order_id DESC;";
    $ordresult = mysqli_query($conn,$ordquery);
    if(!$ordquery){
        echo"Wrong Input";
    }
    $orders = mysqli_fetch_all($ordresult,MYSQLI_ASSOC);





?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Products</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $product_count?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earning</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">₹ <?=$totalearning_count?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $order_count?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pendingOrder_count?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- recent orders table start -->
    <section class="cart-section ptb-120">
        <div class="container">
            <div class="rounded-2 overflow-hidden">
                <table class="cart-table w-100 mt-4 bg-white">
                    <thead>
                    <th>order_id</th>
                        <th>Name</th>
                        <th>Payment type</th>
                        <th>Order Total</th>
                        <th>Status</th>
                        <th>Placed on</th>
                    </thead>
                    <tbody>
                            <form action="../handler/update_cart.php" method="post">
                                <?php
                                    foreach($orders as $order){

                                    
                                ?>
                                <tr>
                                    <td><?= $order['order_id']?></td>
                                    <td><?= $order['userfname']?></td>
                                    <td><?=$order['payment_type']?></td>
                                    <td> ₹<span class="unit-price"><?=$order['total_price']?></span></td>
                                    <td><?=$order['orderstatus']?></td>
                                    <td><?=$order['ordercreated']?></td>
                                </tr>

                                <?php
                                    }
                                ?>
                            </form>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- recent order table end -->
</div>
<!-- /.container-fluid -->


<?php
include('./../includes/footer.php');
?>