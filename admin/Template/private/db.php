<?php 

require 'global_variables.php';


$db=mysqli_connect('localhost',$db_user,$db_password,$db_name);

if(!$db){
    echo "Contact Support team";
    exit(0);
}

date_default_timezone_set('Asia/Kolkata');

if ( session_id() === "" ) {
    ini_set('session.cookie_lifetime',  840000);
     session_start(); 
        }




?>