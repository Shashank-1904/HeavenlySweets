<?php 
session_start();
require('../private/db.php');

if(isset($_POST['addcatbtn']))
{
    $catname = $_POST['catname'];
    $catdscr = $_POST['catdscr'];

    $uploadDir = '../../common_images/category/';
    $brprofile = $_FILES['catimg']['name'];
    $targetFile = $uploadDir . basename($brprofile);

    $query = "SELECT * FROM category WHERE catname='$catname'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Category Already Present'];
        echo "<script> window.location.replace('../pages/add-categories.php'); </script> ";
        exit;
    }

    $query = "INSERT INTO category (catname, catdscr, catimg) values ('$catname', '$catdscr', '$brprofile')";
    $result = mysqli_query($conn, $query);

    if($query)
    {
        if (move_uploaded_file($_FILES['catimg']['tmp_name'], $targetFile))
        {
            $_SESSION['message'] = ['type' => 'success', 'text' => 'Category Added Successfully'];
            echo "<script> window.location.replace('../pages/all-categories.php'); </script> ";
            exit;
        }
        else
        {
            $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Image Upload Error'];
            echo "<script> window.location.replace('../pages/add-categories.php'); </script> ";
            exit;
        }
    }
    else
    {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Failed to Add Category'];
        echo "<script> window.location.replace('../pages/add-categories.php'); </script> ";
        exit;
    }
}

?>