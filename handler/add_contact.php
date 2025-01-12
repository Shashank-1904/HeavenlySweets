<?php
require('../private/db.php');
session_start();

if(isset($_SESSION['userid'])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['messagebtn']))
    {
        $user_id=$_SESSION['userid'];
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $reason = mysqli_real_escape_string($conn, $_POST['reason']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
    
        
            $query = "INSERT INTO contact (user_id,firstname, lastname, email,phone,reason,message) VALUES ('$user_id','$fname', '$lname', '$email','$phone','$reason','$message')";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Your Response has been recorded!!'];
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