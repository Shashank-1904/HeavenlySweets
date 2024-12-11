<?php 
session_start();
require('./../private/db.php');
if(isset($_SESSION['user_email']))
{
    
}
else
{
    session_destroy();
    echo "<script> window.location.replace('../Home/login.php'); </script> ";

}
?>