<?php 
session_start();

if(isset($_SESSION['useremail']))
{
    echo "<script> window.location.replace('../Home/index.php'); </script>";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | HeavenlySweets</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./../assets/css/login.css" />
    <link rel="stylesheet" href="./../assets/css/custom.css" />
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <?php
        if (isset($_SESSION['message'])): 
    ?>
        <div class="toast <?php echo $_SESSION['message']['type']; ?>" id="toast">
            <span class="toast-text"><?php echo $_SESSION['message']['text']; ?></span>
            <button class="toast-close" id="closeToast">×</button>
        </div>
    <?php 
        unset($_SESSION['message']); // Clear the session message 
        endif; 
    ?>
    <form class="bg-white p-4 rounded shadow-lg" style="max-width: 800px; width: 100%;" method="POST" action="../handler/register_handle.php">
        <h2 class="text-center text-danger">Welcome, User!</h2>
        <p class="text-center">Please Register</p>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Enter First Name" name="ufname" required />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Enter Last Name" name="ulname" required />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Enter Email" name="uemail" required />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <input type="number" class="form-control" placeholder="Enter Phone" name="uphone" required />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Enter Password" name="upass" required />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Enter Confirm Password" name="ucnfpass" required />
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-danger w-100" name="regbtn">Register</button>
        <div class="text-center mt-3">
            <a href="./login.php" class="text-decoration-none">Already have an account? Login</a>
        </div>
    </form>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./../assets/js/custom.js"></script>
</body>

</html>
