<?php 
session_start();
require('../private/db.php');

if(isset($_POST['editcatbtn']))
{
    $catid = $_POST['catid'];
    $catname = $_POST['catname'];
    $catdscr = $_POST['catdscr'];

    $uploadDir = '../../common_images/category/';
    $catprofile = $_FILES['catimg']['name'];
    $targetFile = $uploadDir . basename($catprofile);

    $query = "SELECT * FROM category WHERE catname='$catname' AND catid != '$catid'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Category Name Already Present Choose another one', 'id' => $catid];
        echo "<script> window.location.replace('../pages/edit-categories.php'); </script> ";
        exit;
    }

    $query = "SELECT * FROM category WHERE catid='$catid'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);

    if($catprofile == '')
    {
        $catprofile = $row['catimg'];

        $query = "UPDATE category SET catname = '$catname', catdscr='$catdscr', catimg='$catprofile' WHERE catid='$catid'";
        $result = mysqli_query($conn, $query);

        if($query)
        {
            $_SESSION['message'] = ['type' => 'success', 'text' => 'Category Updated Successfully'];
            echo "<script> window.location.replace('../pages/all-categories.php'); </script> ";
            exit;
        }
        else
        {
            $_SESSION['message'] = ['type' => 'errorr', 'text' => 'DB Error', 'id' => $catid];
            echo "<script> window.location.replace('../pages/edit-categories.php'); </script> ";
            exit;
        }
    }
    else
    {
        $catprofile = $catprofile;

        $query = "UPDATE category SET catname = '$catname', catdscr='$catdscr', catimg='$catprofile' WHERE catid='$catid'";
        $result = mysqli_query($conn, $query);

        if($query)
        {
            if (move_uploaded_file($_FILES['catimg']['tmp_name'], $targetFile))
            {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Category Updated Successfully'];
                echo "<script> window.location.replace('../pages/all-categories.php'); </script> ";
                exit;
            }
            else
            {
                $_SESSION['message'] = ['type' => 'errorr', 'text' => 'Image Upload Error', 'id' => $catid];
                echo "<script> window.location.replace('../pages/edit-categories.php'); </script> ";
                exit;
            }
        }
        else
        {
            $_SESSION['message'] = ['type' => 'errorr', 'text' => 'DB Error', 'id' => $catid];
            echo "<script> window.location.replace('../pages/edit-categories.php'); </script> ";
            exit;
        }
    }
}

?>