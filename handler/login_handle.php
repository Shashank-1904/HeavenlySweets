<?php
require('./../private/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logbtn']))
{
    $uemail = mysqli_real_escape_string($conn, $_POST['uemail']);
    $upass = mysqli_real_escape_string($conn, $_POST['upass']);

    $upass = md5($upass);

    $query = "SELECT * FROM users WHERE useremail = '$uemail'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && $user['userpass'] == $upass)
    {
        $_SESSION['userid'] = $user['useruid'];
        $_SESSION['useremail'] = $user['useremail'];
        $_SESSION['username'] = $user['userfname']. ' ' .$user['userlname'];
        $_SESSION['message'] = ['type' => 'success', 'text' => 'Login Successfull..!'];
        echo "<script> window.location.replace('../Home/index.php'); </script>";
        exit;
    }
    else
    {
        $_SESSION['message'] = ['type' => 'error', 'text' => 'Email or Password is Incorrect'];
        echo "<script> window.location.replace('../Home/login.php'); </script>";
        exit;
    }
}
?>
