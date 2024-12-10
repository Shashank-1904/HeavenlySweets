<?php
require('./../private/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['loginbtn']))
{
    $email = mysqli_real_escape_string($conn, $_POST['uemail']);
    $password = $_POST['upass'];

    $password = md5($password);

    // Check if the user exists
    $query = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && $user[''] == $password)
    {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        header("Location: ./../index.php");
        exit();
    }
    // Set error and redirect back to login
    $_SESSION['error'] = "Invalid email or password.";
    header("Location: ./../login.php");
    exit();
}
header("Location: ./../login.php");
exit();
?>
