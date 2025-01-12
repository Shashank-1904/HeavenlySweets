<?php
require('../private/db.php');
session_start();

if(isset($_SESSION['userid'])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addcartbtn']))
    {
        $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
        $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
        $product_qty = mysqli_real_escape_string($conn, $_POST['product_qty']);
        $user_id = $_SESSION['userid'];
        // $product_qty = 1;
    
        
            $query = "INSERT INTO productCart (user_id,product_id, productqty, product_price) VALUES ('$user_id','$product_id', '$product_qty', '$product_price')";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Added to Cart'];
                echo "<script> window.location.replace('../Home/index.php'); </script>";
                exit;
            }
    }
}
else{
    $_SESSION['message'] = ['type' => 'error', 'text' => 'Login not Found'];
    echo "<script> window.location.replace('../Home/index.php'); </script>";
    exit;
}


?>