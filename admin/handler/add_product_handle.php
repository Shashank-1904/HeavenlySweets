<?php 
session_start();
require('../private/db.php');

if (isset($_POST['addprodbtn'])) {
    $catid = $_POST['catid'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description']; // Fixed the misspelled name
    $product_qty = $_POST['product_qty'];
    $product_price = $_POST['product_price'];
    $product_rating = $_POST['product_rating'];

    // Directory for file uploads
    $uploadDir = '../../common_images/product/';

    // Handle file upload
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == UPLOAD_ERR_OK) {
        $product_image = basename($_FILES['product_image']['name']);
        $targetFile = $uploadDir . $product_image;

        // Check if the upload directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Create the directory if it doesn't exist
        }

        // Check if a product with the same name exists
        $query = "SELECT * FROM product WHERE product_name = '$product_name'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['message'] = ['type' => 'error', 'text' => 'Product Already Present'];
            echo "<script> window.location.replace('../pages/add-products.php'); </script>";
            exit;
        }

        // Insert product into the database
        $query = "INSERT INTO product (catid, product_name, product_description, product_image, product_qty, product_price, product_rating) 
                  VALUES ('$catid', '$product_name', '$product_description', '$product_image', '$product_qty', '$product_price', '$product_rating')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['product_image']['tmp_name'], $targetFile)) {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Product Added Successfully'];
                echo "<script> window.location.replace('../pages/all-products.php'); </script>";
                exit;
            } else {
                $_SESSION['message'] = ['type' => 'error', 'text' => 'Image Upload Error'];
                echo "<script> window.location.replace('../pages/add-products.php'); </script>";
                exit;
            }
        } else {
            $_SESSION['message'] = ['type' => 'error', 'text' => 'Failed to Add Product'];
            echo "<script> window.location.replace('../pages/add-products.php'); </script>";
            exit;
        }
    } else {
        $_SESSION['message'] = ['type' => 'error', 'text' => 'No Image Selected or Upload Error'];
        echo "<script> window.location.replace('../pages/add-products.php'); </script>";
        exit;
    }
}
?>
