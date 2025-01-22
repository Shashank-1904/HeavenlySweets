<?php
require('../private/db.php');
session_start();

if(isset($_SESSION['userid'])) {
    if(isset($_GET['referenceID'])) {
        $referenceID = mysqli_real_escape_string($conn, $_GET['referenceID']);

        // Query to fetch order details
        $query = "SELECT product.product_name, productCart.productqty, productCart.product_price, 
                         (productCart.productqty * productCart.product_price) AS total 
                  FROM productCart 
                  JOIN orders ON orders.referenceID = productCart.orderReference 
                  JOIN product ON productCart.product_id = product.product_id 
                  WHERE productCart.orderReference = '$referenceID'";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0) {
            $products = [];
            while($row = mysqli_fetch_assoc($result)) {
                $products[] = $row;
            }
            echo json_encode(["success" => true, "products" => $products]);
        } else {
            echo json_encode(["success" => false, "message" => "Order details not found"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "Invalid request"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "User not authenticated"]);
}
?>
