<?php
session_start();
require('../private/db.php');

if (isset($_POST['deletecatbtn'])) 
{
    $catid = $_POST['catid'];

    $query = "DELETE FROM category WHERE catid='$catid'";
    $result = mysqli_query($conn, $query);

    if ($query) {
        $_SESSION['message'] = ['type' => 'success', 'text' => 'Category Deleted Successfully'];
        echo "<script> window.location.replace('../pages/all-categories.php'); </script> ";
        exit;
    } else {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Failed to Delete Category'];
        echo "<script> window.location.replace('../pages/all-categories.php'); </script> ";
        exit;
    }
}
