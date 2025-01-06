<?php 
session_start();
require('../private/db.php');

if (isset($_POST['offerbtn']))
{
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $percent = $_POST['percent'];
    $code = $_POST['code'];

    // Directory for file uploads
    $uploadDir = '../../common_images/offer/';

    // Handle file upload
    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
        $img = basename($_FILES['img']['name']);
        $targetFile = $uploadDir . $img;

        // Check if the upload directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Create the directory if it doesn't exist
        }

        $query = "DELETE FROM offer";
        $result = mysqli_query($conn, $query);

        // Insert product into the database
        $query = "INSERT INTO offer (offerheading, offersubheading, offerimg, offerpercentage, offercode) VALUES ('$heading', '$subheading', '$img', '$percent', '$code')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['img']['tmp_name'], $targetFile)) {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Offer Created Successfully'];
                echo "<script> window.location.replace('../pages/all-offers.php'); </script>";
                exit;
            } else {
                $_SESSION['message'] = ['type' => 'error', 'text' => 'Image Upload Error'];
                echo "<script> window.location.replace('../pages/new-offer.php'); </script>";
                exit;
            }
        } else {
            $_SESSION['message'] = ['type' => 'error', 'text' => 'Failed to Create Offer'];
            echo "<script> window.location.replace('../pages/new-offer.php'); </script>";
            exit;
        }
    } else {
        $_SESSION['message'] = ['type' => 'error', 'text' => 'No Image Selected or Upload Error'];
        echo "<script> window.location.replace('../pages/new-offer.php'); </script>";
        exit;
    }
}
?>
