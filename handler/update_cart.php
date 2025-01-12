<?php
require('../private/db.php');
session_start();

if (isset($_SESSION['userid'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_id = $_SESSION['userid'];

        if (isset($_POST['updatebtn'])) {
            $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
            $product_qty = mysqli_real_escape_string($conn, $_POST['qtyvalue']);

            $query = "UPDATE productCart SET productqty = '$product_qty' WHERE user_id = '$user_id' AND product_id = '$product_id'";
            echo$query;
            // if (mysqli_query($conn, $query)) {
            //     $_SESSION['message'] = ['type' => 'success', 'text' => 'Cart updated successfully'];
            // } else {
            //     $_SESSION['message'] = ['type' => 'error', 'text' => 'Failed to update cart'];
            // }
        } elseif (isset($_POST['deletebtn'])) {
            $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);

            $query = "DELETE FROM productCart WHERE user_id = '$user_id' AND product_id = '$product_id'";
            if (mysqli_query($conn, $query)) {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Product removed from cart'];
            } else {
                $_SESSION['message'] = ['type' => 'error', 'text' => 'Failed to remove product'];
            }
        }

        // echo "<script> window.location.replace('../Home/index.php'); </script>";
        // exit;
    }
} else {
    $_SESSION['message'] = ['type' => 'error', 'text' => 'Login not found'];
    echo "<script> window.location.replace('../Home/index.php'); </script>";
    exit;
}
