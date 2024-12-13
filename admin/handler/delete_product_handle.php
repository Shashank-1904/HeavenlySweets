<?php
session_start();
require('../private/db.php');

if (isset($_POST['deleteproductbtn'])) 
{
    $product_id = $_POST['product_id'];

    $query = "DELETE FROM product WHERE product_id='$product_id'";
    $result = mysqli_query($conn, $query);

    if ($query) {
        $_SESSION['message'] = ['type' => 'success', 'text' => 'Product Deleted Successfully'];
        echo "<script> window.location.replace('../pages/all-products.php'); </script> ";
        exit;
    } else {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Failed to Delete Product'];
        echo "<script> window.location.replace('../pages/all-products.php'); </script> ";
        exit;
    }
}
