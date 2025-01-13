
<?php
require('../private/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['profileupdatebtn'])) {
    // Get user ID from session
    $user_id = $_SESSION['userid'];
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $DOB = mysqli_real_escape_string($conn, $_POST['dob']);
    $imageName = '';

    // Handle file upload
    if (isset($_FILES['userimage']) && $_FILES['userimage']['error'] === UPLOAD_ERR_OK) {
        $imageTmpName = $_FILES['userimage']['tmp_name'];
        $originalImageName = $_FILES['userimage']['name'];
        $imageExtension = pathinfo($originalImageName, PATHINFO_EXTENSION);

        // Validate file type (e.g., only allow JPG, PNG)
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        if (in_array(strtolower($imageExtension), $allowedExtensions)) {
            // Create a unique name for the file
            $imageName = uniqid('user_') . '.' . $imageExtension;
            $targetDirectory = '../assets/img/users/';
            $targetFilePath = $targetDirectory . $imageName;

            // Move uploaded file to the target directory
            if (!move_uploaded_file($imageTmpName, $targetFilePath)) {
                die('Failed to upload image. Please try again.');
            }
        } else {
            die('Invalid file type. Please upload a JPG, JPEG, or PNG image.');
        }
    }

    // Update database with new details
    $sql = "UPDATE users set userfname = '$fname',userlname = '$lname',userphone = '$phone',useremail = '$email',DOB ='$DOB',userimg = '$imageName' WHERE useruid = '$user_id'";
    $result1 =  mysqli_query($conn, $sql);
    if($result1){
        $_SESSION['message'] = ['type' => 'success', 'text' => 'Updated Successfully !'];
        echo "<script> window.location.replace('../Home/my-account.php'); </script>";
        exit;
    }
}
?>
