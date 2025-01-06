<?php 
session_start();
require('../private/db.php');

if(isset($_POST['editofferbtn']))
{
    $offerid = $_POST['offerid'];
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $percent = $_POST['percent'];
    $code = $_POST['code'];

    $uploadDir = '../../common_images/offer/';
    $img = $_FILES['img']['name'];
    $targetFile = $uploadDir . basename($img);

    $query = "SELECT * FROM offer WHERE offeruid='$offerid'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);

    if($img == '')
    {
        $img = $row['offerimg'];
    }
    else
    {
        $img = $img;
        move_uploaded_file($_FILES['img']['tmp_name'], $targetFile);
    }

    $query = "UPDATE offer SET offerheading = '$heading', offersubheading='$subheading', offerimg='$img', offerpercentage='$percent', offercode='$code' WHERE offeruid='$offerid'";
    $result = mysqli_query($conn, $query);

    if($query)
    {
        $_SESSION['message'] = ['type' => 'success', 'text' => 'Offer Updated Successfully'];
        echo "<script> window.location.replace('../pages/all-offers.php'); </script> ";
        exit;
    }
    else
    {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'DB Error', 'id' => $offeridid];
        echo "<script> window.location.replace('../pages/edit-offer.php'); </script> ";
        exit;
    }
}

?>