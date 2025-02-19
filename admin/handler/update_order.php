<?php
session_start();
require('../private/db.php');

if (isset($_POST['updateOrder'])) {
    $order_id = $_POST['order_id'];
    $orderstatus = $_POST['orderstatus'];

    $query = "UPDATE orders SET orderstatus='$orderstatus' WHERE order_id='$order_id'";
    $result = mysqli_query($conn, $query);

    if ($result) 
    {
        $_SESSION['message'] = ['type' => 'success', 'text' => 'Order Updated Successfully'];
        echo "<script> window.location.replace('../pages/all-orders.php'); </script> ";
        exit;
    } else {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Failed to Update Order'];
        echo "<script>window.location.replace('../pages/all-orders.php');</script>";
        exit;
    }
}
?>
