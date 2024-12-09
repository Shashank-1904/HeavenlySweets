<?php
require('./../private/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['loginbtn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['uemail']);
    $password = $_POST['upass'];

    // Check if the user exists
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        // Set session variables and redirect to index
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
