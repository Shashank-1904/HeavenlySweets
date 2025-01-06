<?php
session_start();
require('../private/db.php');

if (isset($_POST['deleteofferbtn'])) 
{
    $offerid = $_POST['offerid'];

    $query = "DELETE FROM offer WHERE offeruid='$offerid'";
    $result = mysqli_query($conn, $query);

    if ($query) {
        $_SESSION['message'] = ['type' => 'success', 'text' => 'Offer Deleted Successfully'];
        echo "<script> window.location.replace('../pages/all-offers.php'); </script> ";
        exit;
    } else {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Failed to Delete Offer'];
        echo "<script> window.location.replace('../pages/all-offers.php'); </script> ";
        exit;
    }
}
