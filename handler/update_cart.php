<?php
require('../private/db.php');
session_start();

if (isset($_SESSION['userid'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_id = $_SESSION['userid'];

        if (isset($_POST['updatebtn'])) {
            // Sanitize the inputs
            $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
            $product_qty = mysqli_real_escape_string($conn, $_POST['product_qty']);

            if ($product_qty == floor($product_qty)) {
                $product_qty = intval($product_qty); // Convert to integer if it's a whole number
            }

            $query = "UPDATE productCart SET productqty = '$product_qty' WHERE user_id = '$user_id' AND product_id = '$product_id'";
            if (mysqli_query($conn, $query)) 
            {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Cart updated successfully'];
            }
            else
            {
                $_SESSION['message'] = ['type' => 'error', 'text' => 'Failed to update cart'];
            }
            header("Location: ../home/cart.php");
            exit;
        }

        if (isset($_POST['deletebtn'])) {
            // Sanitize the inputs
            $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);

            $query = "DELETE FROM productCart WHERE user_id = '$user_id' AND product_id = '$product_id'";
            if (mysqli_query($conn, $query)) 
            {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Cart updated successfully'];
            }
            else
            {
                $_SESSION['message'] = ['type' => 'error', 'text' => 'Failed to update cart'];
            }
            header("Location: ../home/cart.php");
            exit;
        }
    }
} else {
    $_SESSION['message'] = ['type' => 'error', 'text' => 'Login not found'];
    header("Location: ../Home/index.php");
    exit;
}
