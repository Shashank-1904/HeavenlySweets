<?php
require('../private/db.php');
session_start();

if(isset($_SESSION['userid'])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addaddressbtn']))
    {
        $user_id = $_SESSION['userid'];
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $aptnumber = mysqli_real_escape_string($conn, $_POST['aptnumber']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $zipcode = mysqli_real_escape_string($conn, $_POST['zipcode']);
       
    
        
            $query = "INSERT INTO shippingaddress (user_id,fname, lname, address,mobile,email,aptno,state,zipcode) VALUES ('$user_id','$fname', '$lname', '$address','$phone','$email','$aptnumber','$state','$zipcode')";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Added to Cart'];
                echo "<script> window.location.replace('../Home/checkout.php'); </script>";
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