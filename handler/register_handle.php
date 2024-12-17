<?php
require('../private/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['regbtn']))
{
    $ufname = mysqli_real_escape_string($conn, $_POST['ufname']);
    $ulname = mysqli_real_escape_string($conn, $_POST['ulname']);
    $uemail = mysqli_real_escape_string($conn, $_POST['uemail']);
    $uphone = mysqli_real_escape_string($conn, $_POST['uphone']);
    $upass = mysqli_real_escape_string($conn, $_POST['upass']);
    $ucnfpass = mysqli_real_escape_string($conn, $_POST['ucnfpass']);

    if(strlen($uphone) != 10)
    {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Phone Number must be of 10 digits..!'];
        echo "<script> window.location.replace('../Home/register.php'); </script>";
        exit;
    }

    if(strlen($upass) < 8)
    {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Password Must be at least 8 characters long..!'];
        echo "<script> window.location.replace('../Home/register.php'); </script>";
        exit;
    }

    if($ucnfpass != $upass)
    {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Password and Confirm password must be same..!'];
        echo "<script> window.location.replace('../Home/register.php'); </script>";
        exit;
    }
    else
    {
        $upass = md5($upass);
    }

    $query = "SELECT * FROM users WHERE useremail = '$uemail'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0)
    {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'User Already Exist..!'];
        echo "<script> window.location.replace('../Home/register.php'); </script>";
        exit; 
    }
    else
    {
        $query = "INSERT INTO users (userfname, userlname, useremail, userphone, userpass) VALUES ('$ufname', '$ulname', '$uemail', '$uphone', '$upass')";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            $_SESSION['message'] = ['type' => 'success', 'text' => 'User Registered Successfully..!'];
            echo "<script> window.location.replace('../Home/login.php'); </script>";
            exit;
        }
        else
        {
            $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Something went wrong'];
            echo "<script> window.location.replace('../Home/register.php'); </script>";
            exit;
        } 
    }
}
?>
