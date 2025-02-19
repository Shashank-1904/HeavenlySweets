<?php
require('../private/db.php');
session_start();

if(isset($_SESSION['userid']))
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['placeorderbtn']))
    {
        $user_id = $_SESSION['userid'];
        $shippingaddress_id = mysqli_real_escape_string($conn, $_POST['shipping_address']);
        $billingaddress_id = mysqli_real_escape_string($conn, $_POST['billing_address']);
        $payment_type = mysqli_real_escape_string($conn, $_POST['payment']);
        $total_price = mysqli_real_escape_string($conn, $_POST['total_price']);
        date_default_timezone_set('Asia/Kolkata');
        $referenceid = date("YmdHis");
    
        
            $query = "INSERT INTO orders (user_id,shippingaddressid, billingaddressid, payment_type,total_price,referenceID) VALUES ('$user_id','$shippingaddress_id', '$billingaddress_id', '$payment_type','$total_price','$referenceid')";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                $query1 ="UPDATE productCart set orderReference = '$referenceid' WHERE user_id = '$user_id' AND orderReference is NULL";
                $result1 =  mysqli_query($conn, $query1);
                if($result1){
                    $_SESSION['message'] = ['type' => 'success', 'text' => 'Order placed Successfully'];
                    echo "<script> window.location.replace('../Home/index.php'); </script>";
                    exit;
                }
            }
    }
}
else{
    $_SESSION['message'] = ['type' => 'error', 'text' => 'Login not Found'];
    echo "<script> window.location.replace('../Home/index.php'); </script>";
    exit;
}


?>