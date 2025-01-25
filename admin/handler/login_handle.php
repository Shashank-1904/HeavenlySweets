<?php
require('./../private/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['loginbtn']))
{
    $email = mysqli_real_escape_string($conn, $_POST['uemail']);
    $password = $_POST['upass'];

    $password = md5($password);

    $query = "SELECT * FROM admins WHERE admin_email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && $user['admin_pass'] == $password)
    {
        $_SESSION['user_id'] = $user['admin_id'];
        $_SESSION['user_email'] = $user['admin_email'];
        header("Location: ./../home/index.php");
        exit();
    }
    // Set error and redirect back to login
    $_SESSION['error'] = "Invalid email or password.";
    header("Location: ./../home/login.php");
    exit();
}
header("Location: ./../home/login.php");
exit();
?>
