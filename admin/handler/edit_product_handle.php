<?php
session_start();
require('../private/db.php');

if (isset($_POST['editproductbtn'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_qty = $_POST['product_qty'];
    $product_price = $_POST['product_price'];
    $product_rating = $_POST['product_rating'];
    $catid = $_POST['catid'];

    $uploadDir = '../../common_images/product/';
    $productImage = $_FILES['product_image']['name'];
    $targetFile = $uploadDir . basename($productImage);

    $query = "SELECT * FROM product WHERE product_name='$product_name' AND product_id != '$product_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Product Name Already Exists', 'id' => $product_id];
        echo "<script>window.location.replace('../pages/edit_products.php');</script>";
        exit;
    }

    $query = "SELECT * FROM product WHERE product_id='$product_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($productImage == '') {
        $productImage = $row['product_image'];
    } else {
        move_uploaded_file($_FILES['product_image']['tmp_name'], $targetFile);
    }

    $query = "UPDATE product 
              SET product_name='$product_name', product_description='$product_description', 
                  product_image='$productImage', product_qty='$product_qty', 
                  product_price='$product_price', product_rating='$product_rating',
                  catid='$catid'
              WHERE product_id='$product_id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['message'] = ['type' => 'success', 'text' => 'Product Updated Successfully'];
        echo "<script>window.location.replace('../pages/all-products.php');</script>";
        exit;
    } else {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'DB Error', 'id' => $product_id];
        echo "<script>window.location.replace('../pages/edit_products.php');</script>";
        exit;
    }
}
