<?php
$pageName = "Home";
$totalPrice =0;
$shipping_amount = 0;
include('../includes/header.php');
include('../includes/navbar.php');
include('../private/db.php');

if(isset($_SESSION['userid'])){
    $user_id = $_SESSION['userid'];

    // Cart product fetch start
    $query = "SELECT * 
        FROM product p 
        JOIN productCart pc ON pc.product_id = p.product_id 
        WHERE pc.user_id = '$user_id' 
        AND `orderReference` IS NULL 
        LIMIT 0, 25;";
        $result = mysqli_query($conn,$query);
        if(!$result){
            echo"Wrong Query";
        }
    $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $count = $result->num_rows;

    foreach($products as $product){
        $qtyarr = preg_split('/(?<=\d)(?=[a-zA-Z])/', $product['productqty']);
        $totalPrice = $totalPrice + ($qtyarr[0] * $product['product_price']);
    }

    // Cart product fetch end

    // fetch address start

    $addQuery = "select * from shippingaddress where user_id = '$user_id'";
    $addresult = mysqli_query($conn,$addQuery);
    if(!$addresult){
        echo"Wrong Query";
    }
    $addresses = mysqli_fetch_all($addresult,MYSQLI_ASSOC);

    // fetch address end

}
else{
    echo "<script> window.location.replace('../Home/index.php'); </script>";
}

?>

        <!--breadcrumb section start-->
        <div class="gstore-breadcrumb position-relative z-1 overflow-hidden mt--50">
            <img src="../assets/img/shapes/bg-shape-6.png" alt="bg-shape"
                class="position-absolute start-0 z--1 w-100 bg-shape">
            <img src="../assets/img/shapes/pata-xs.svg" alt="pata" class="position-absolute pata-xs z--1 vector-shape">
            <img src="../assets/img/shapes/onion.png" alt="onion"
                class="position-absolute z--1 onion start-0 top-0 vector-shape">
            <img src="../assets/img/shapes/frame-circle.svg" alt="frame circle"
                class="position-absolute z--1 frame-circle vector-shape">
            <img src="../assets/img/shapes/leaf.svg" alt="leaf" class="position-absolute z--1 leaf vector-shape">
            <img src="../assets/img/shapes/garlic-white.png" alt="garlic"
                class="position-absolute z--1 garlic vector-shape">
            <img src="../assets/img/shapes/roll-1.png" alt="roll" class="position-absolute z--1 roll vector-shape">
            <img src="../assets/img/shapes/roll-2.png" alt="roll" class="position-absolute z--1 roll-2 vector-shape">
            <img src="../assets/img/shapes/pata-xs.svg" alt="roll"
                class="position-absolute z--1 pata-xs-2 vector-shape">
            <img src="../assets/img/shapes/tomato-half.svg" alt="tomato"
                class="position-absolute z--1 tomato-half vector-shape">
            <img src="../assets/img/shapes/tomato-slice.svg" alt="tomato"
                class="position-absolute z--1 tomato-slice vector-shape">
            <img src="../assets/img/shapes/cauliflower.png" alt="tomato"
                class="position-absolute z--1 cauliflower vector-shape">
            <img src="../assets/img/shapes/leaf-gray.png" alt="tomato"
                class="position-absolute z--1 leaf-gray vector-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="mb-2 text-center">Check Out Page</h2>
                            <nav>
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item fw-bold" aria-current="page"><a
                                            href="index.html">Home</a></li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Page</li>
                                    <li class="breadcrumb-item fw-bold" aria-current="page">Check Out</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb section end-->

        <!--checkout section start-->
        <div class="checkout-section ptb-120">
            <div class="container">
                <form action="../handler/place_order.php" method="post">
                    <div class="row g-4">
                        <div class="col-xl-8">
                            <div class="checkout-steps">
                                <div class="d-flex justify-content-between">
                                    <h4 class="mb-5">Shipment Address</h4>
                                    <?php echo count($addresses) == 0 ? '<a href="#" data-bs-toggle="modal" data-bs-target="#addAddressModal"
                                        class="fw-semibold"><i class="fas fa-plus me-1"></i> Add Address</a>' : '' ?>
                                </div>
                                <div class="row g-4">

                                    <?php
                                    foreach($addresses as $address){

                                    
                                ?>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="tt-address-content">
                                            <input type="radio" class="tt-custom-radio" checked name="shipping_address"
                                                id="tt-radio-1" value="<?= $address['addrid']?>">
                                            <label for="tt-radio-1"
                                                class="tt-address-info bg-white rounded p-4 position-relative">
                                                <strong><?=$address['fname']," ", $address['lname']?></strong>
                                                <address class="fs-sm mb-0">
                                                    <?= $address['aptno']," ",$address['address']?> <br>
                                                    <?= $address['state']," ",$address['zipcode']?>
                                                </address>
                                                <a href="#"
                                                    class="tt-edit-address checkout-radio-link position-absolute">Edit</a>
                                            </label>
                                        </div>
                                    </div>

                                    <?php
                                    }
                                ?>
                                </div>


                                <h4 class="mb-5 mt-8">Billing Address</h4>
                                <div class="row g-4">

                                    <?php
                                    foreach($addresses as $address){
                                       
                                ?>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="tt-address-content">
                                            <input type="radio" class="tt-custom-radio" checked name="billing_address"
                                                id="tt-radio-4" value="<?= $address['addrid']?>">
                                            <label for="tt-radio-4"
                                                class="tt-address-info bg-white rounded p-4 position-relative">
                                                <strong><?=$address['fname']," ", $address['lname']?></strong>
                                                <address class="fs-sm mb-0">
                                                    <?= $address['aptno']," ",$address['address']?> <br>
                                                    <?= $address['state']," ",$address['zipcode']?>
                                                </address>
                                                <a href="#"
                                                    class="tt-edit-address checkout-radio-link position-absolute">Edit</a>
                                            </label>
                                        </div>
                                    </div>

                                    <?php
                                    }
                                ?>
                                </div>

                                <h4 class="mt-8">Payment Method</h4>
                                <div
                                    class="checkout-radio d-flex align-items-center justify-content-between gap-3 bg-white rounded p-4 mt-4">
                                    <div class="radio-left d-inline-flex align-items-center">
                                        <div class="theme-radio">
                                            <input type="radio" id="paypal" name="payment" value="paypal">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="paypal" class="ms-2 h6 mb-0">Online Payment (UPI) </label>
                                    </div>
                                    <div class="radio-right text-end">
                                        <img src="../assets/img/brands/upi.png" alt="paypal" class="img-fluid w-30">
                                    </div>
                                </div>
                                <div
                                    class="checkout-radio d-flex align-items-center justify-content-between gap-3 bg-white rounded p-4 mt-4">
                                    <div class="radio-left d-inline-flex align-items-center">
                                        <div class="theme-radio">
                                            <input type="radio" id="paypal" name="payment" value="COD">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="paypal" class="ms-2 h6 mb-0">Cash on Delivery</label>
                                    </div>
                                </div>
                            </div>


                            <!--add address modal start-->
                        </div>
                        <div class="col-xl-4">
                            <div class="checkout-sidebar">
                                <div class="sidebar-widget checkout-sidebar py-6 px-4 bg-white rounded-2">
                                    <div class="widget-title d-flex">
                                        <h5 class="mb-0 flex-shrink-0">Order Summery</h5>
                                        <span
                                            class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                    </div>
                                    <table class="sidebar-table w-100 mt-5">
                                        <tr>
                                            <td>Items(<?= $count?>):</td>
                                            <td class="text-end">₹ <?= $totalPrice?></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping & handling:</td>
                                            <td class="text-end">Free</td>
                                        </tr>
                                        <!-- <tr>
                                        <td>Before tax:</td>
                                        <td class="text-end">$336,04</td>
                                    </tr> -->
                                    </table>
                                    <span class="sidebar-spacer d-block my-4 opacity-50"></span>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0 fs-md">Tax collected</h6>
                                        <h6 class="mb-0 fs-md">₹ <?= $totalPrice+ $shipping_amount?></h6>
                                        <input type="hidden" name="total_price" value="<?= $totalPrice+ $shipping_amount?>">
                                    </div>
                                    <button type="submit" name="placeorderbtn" class="btn btn-primary btn-md rounded mt-6 w-100" 
    <?php echo count($addresses) == 0 || $count == 0 ? 'disabled' : ''; ?>>Place Order</button>
    <?php echo count($addresses) == 0 ? '<p class="mt-3 mb-0 fs-xs text-danger">Add Address First Before Placing the Order</p>' : '<p class="mt-3 mb-0 fs-xs">By Placing your order your agree to our company Privacy Policy</p>' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--checkout section end-->
        <!-- Modal -->
        <div class="modal fade" id="addAddressModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                                                aria-label="Close"></button>

                                            <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                                                <h2 class="modal-title fs-5 mb-3">Add New Address</h2>
                                                <div class="row align-items-center g-4 mt-3">
                                                    <form action="../handler/add_address.php" method="post">
                                                        <div class="row g-4">
                                                            <div class="col-sm-6">
                                                                <div class="label-input-field">
                                                                    <label>First Name</label>
                                                                    <input type="text" placeholder="Saiful"
                                                                        name="fname">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="label-input-field">
                                                                    <label>Last Name</label>
                                                                    <input type="text" placeholder="Talukdar"
                                                                        name="lname">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="label-input-field">
                                                                    <label>Street Address</label>
                                                                    <input type="text"
                                                                        placeholder="Mountain View, California, United States"
                                                                        name="address">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="label-input-field">
                                                                    <label>Mobile</label>
                                                                    <input type="tel" placeholder="Phone Number"
                                                                        name="phone">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="label-input-field">
                                                                    <label>Email</label>
                                                                    <input type="email" placeholder="Your Email"
                                                                        name="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="label-input-field">
                                                                    <label>Apt Number</label>
                                                                    <input type="text" placeholder="Apart Number"
                                                                        name="aptnumber">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="label-input-field">
                                                                    <label>State</label>
                                                                    <input type="text" placeholder="Dhaka" name="state">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="label-input-field">
                                                                    <label>Zip Code</label>
                                                                    <input type="text" placeholder="Dhaka-1230"
                                                                        name="zipcode">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-6 d-flex">
                                                            <button type="submit" class="btn btn-secondary btn-md me-3"
                                                                name="addaddressbtn">Use this Address</button>
                                                            <button type="submit"
                                                                class="btn btn-outline-secondary border-secondary btn-md">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--add address modal end-->

<?php
include('../includes/footer.php');
?>