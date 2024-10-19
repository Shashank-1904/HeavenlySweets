<?php


require '../private/global_variables.php';    



function generate_company_id(){
    require 'db.php';  
     for ($i = 1; $i < 99; $i++) {
        $company_id = strval('suraj') . "c" . strval($i);
        $check_company_id_present = "SELECT company_id FROM company WHERE company_id='" . $company_id . "'";
        $exe = mysqli_query($db, $check_company_id_present);
        $company_id_count=mysqli_num_rows($exe);
        if($company_id_count == 0){
            $db->close();
            return $company_id;
        }
     } 
}


function generate_ticket_id($event_id_raw){
    require 'db.php';  
     for ($i = 1; $i < 99; $i++) {
        $ticket_id = strval($event_id_raw) . "t" . strval($i);
        $check_ticket_id_present = "SELECT main_ticket_id FROM main_ticket WHERE main_ticket_id='" . $ticket_id . "'";
        $exe = mysqli_query($db, $check_ticket_id_present);
        $ticket_id_count=mysqli_num_rows($exe);
        if($ticket_id_count == 0){
            $db->close();
            return $ticket_id;
        }
     }
}


function generate_sub_ticket_id($ticket_id_raw,$ticket_date){
    require 'db.php';  
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $rand_str = substr(str_shuffle($characters), 0, 3);
        $date_str =  str_replace('-', '', $ticket_date);;
        $sub_ticket_id = strval($ticket_id_raw) . "d" .$rand_str. strval($date_str);
        $check_ticket_id_present = "SELECT ticket_id FROM tickets WHERE ticket_id='" . $sub_ticket_id . "'";
        $exe = mysqli_query($db, $check_ticket_id_present);
        $ticket_id_count=mysqli_num_rows($exe);
        if($ticket_id_count == 0){
            $db->close();
            return $sub_ticket_id;
        }
     }



function generate_promocode_id($event_id_raw){
    require 'db.php';  
     for ($i = 1; $i < 999; $i++) {
        $promocode_id = strval($event_id_raw) . "p" . strval($i);
        $check_promocode_id_present = "SELECT promocode_id FROM promo_codes WHERE promocode_id='" . $promocode_id . "'";
        $exe1 = mysqli_query($db, $check_promocode_id_present);
        $promocode_id_count=mysqli_num_rows($exe1);
        if($promocode_id_count == 0){
            $db->close();
            return $promocode_id;
        }
     }
}

function generatecsrfToken( $formName ) 
{

 
    $secretKey = 'ILoveYou';
    /*if ( null !== session_id() ) {
        session_start();
    }
    */
    $sessionId = session_id();
    //return "xxx";
    return sha1( $formName.$secretKey )."__hey_what_are_you_doing_here__".md5('I_Really_love_you');

}

function hashpass($passxx){
    return md5($passxx)."ILoveYou";
}

function login_token( $xx ) 
{

    $sessionId = session_id();
    //return "xxx";
    return sha1( $xx.$sessionId );

}


function generate_blog_id(){
    require 'db.php';  
     for ($i = 1; $i < 999; $i++) {
        $event_id = "blog_" . strval($i);
        $check_event_id_present = "SELECT event_id FROM events WHERE event_id='" . $event_id . "'";
        $exe = mysqli_query($db, $check_event_id_present);
        $event_id_count=mysqli_num_rows($exe);
        if($event_id_count == 0){
            $db->close();
            return $event_id;
        }
     }
}



function e_data($plaintext, $key, $iv) {
    // Ensure the key and IV are valid lengths
    $key = substr(hash('sha256', $key, true), 0, 32); // 256-bit key
    $iv = substr(hash('sha256', $iv, true), 0, 16);   // 128-bit IV
    
    // Encrypt the data
    $ciphertext = openssl_encrypt($plaintext, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
    
    // Encode the encrypted data to base64 for easy storage
    return base64_encode($ciphertext);
}

function d_data($ciphertext, $key, $iv) {
    // Ensure the key and IV are valid lengths


    $key = substr(hash('sha256', $key, true), 0, 32); // 256-bit key
    $iv = substr(hash('sha256', $iv, true), 0, 16);   // 128-bit IV
    
    // Decode the data from base64
    $ciphertext = base64_decode($ciphertext);
    
    // Decrypt the data
    return strval(openssl_decrypt($ciphertext, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv));
}

?>