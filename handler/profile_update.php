<?php
require('../private/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['profileupdatebtn']))
{
    $user_id = $_SESSION['userid'];
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);


    $query1 ="UPDATE users set userfname = '$fname',userlname = '$lname',userphone = '$phone',useremail = '$email' WHERE useruid = '$user_id'";
    $result1 =  mysqli_query($conn, $query1);
    if($result1){
        $_SESSION['message'] = ['type' => 'success', 'text' => 'Updated Successfully !'];
        echo "<script> window.location.replace('../Home/my-account.php'); </script>";
        exit;
    }
}
?>