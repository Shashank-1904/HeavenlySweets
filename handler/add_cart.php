<?php
require('../private/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addcartbtn']))
{
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $product_qty = 1;
   
    
        $query = "INSERT INTO productCart (product_id, product_qty, product_price) VALUES ('$product_id', '$product_price', '$product_qty')";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            $_SESSION['message'] = ['type' => 'success', 'text' => 'Added to Cart'];
            echo "<script> window.location.replace('../Home/index.php'); </script>";
            exit;
        }
}
?>