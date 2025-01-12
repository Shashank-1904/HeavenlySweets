<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta-->
    <meta name="description" content="---">
    <meta name="author" content="---">
    <meta name="keywords" content="---">
    <!--favicon icon-->
    <link rel="icon" href="../assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title><?php echo $pageName; ?> | HeavenlySweets</title>

    <!--build:css-->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- <link rel="stylesheet" href="../assets/css/custom.css"> -->
     <style>
        
/* Toast container */
.toast {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    display: none;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    z-index: 9999;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Success Toast */
.toast.success {
    background-color: green;
}

/* Error Toast */
.toast.error {
    background-color: red;
}

.toast.warning {
    background-color: orange;
}

/* Toast text */
.toast-text {
    flex: 1;
}

/* Close button */
.toast-close {
    background: none;
    border: none;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    margin-left: 10px;
    padding: 0;
}

/* Show toast */
.toast.show {
    display: flex;
    opacity: 1;
}

     </style>
    <!-- endbuild -->
</head>

<body>

    <!--preloader start-->
    <!-- <div id="preloader">
        <img src="../assets/img/preloader.gif" alt="preloader" width="450" class="img-fluid">
    </div> -->
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">