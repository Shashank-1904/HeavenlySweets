<?php
require('../private/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['changepasswordbtn']))
{
    $user_id = $_SESSION['userid'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $currpass = mysqli_real_escape_string($conn, $_POST['currpass']);
    $newpassword = mysqli_real_escape_string($conn, $_POST['newpass']);
    $cnfpass = mysqli_real_escape_string($conn, $_POST['cnfpass']);

    $currentpassword = md5($currpass);
    $newpass = md5($newpassword);
    

    if($newpassword != $cnfpass){
        $_SESSION['message'] = ['type' => 'error', 'text' => 'New Password and Confirm Password not Match !'];
        echo "<script> window.location.replace('../Home/my-account.php'); </script>";
        exit;
    }
    else{
        $query = "SELECT * FROM users WHERE useruid = '$user_id' AND useremail = '$email' AND userpass = '$currentpassword'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $user = mysqli_fetch_assoc($result);
            if($user['userpass'] == $currentpassword){
                    $query1 ="UPDATE users set userpass = '$newpass' WHERE useruid = '$user_id'";
                    $result1 =  mysqli_query($conn, $query1);
                    if($result1){
                        $_SESSION['message'] = ['type' => 'success', 'text' => 'changed Successfully !'];
                        echo "<script> window.location.replace('../Home/login.php'); </script>";
                        exit;
                    }
            }
            else{
                $_SESSION['message'] = ['type' => 'error', 'text' => 'Email or Current Password is Incorrect !'];
                echo "<script> window.location.replace('../Home/my-account.php'); </script>";
                exit;
            }
            }
        }
}    

?>