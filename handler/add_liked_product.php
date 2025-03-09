<?php
require('../private/db.php');
session_start();

header('Content-Type: application/json'); // Ensure JSON response

if (!isset($_SESSION['userid'])) {
    $_SESSION['message'] = ['type' => 'error', 'text' => 'Login Not found!'];
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product_id = intval($_POST["product_id"]);
    $action = $_POST["action"];
    $userid = intval($_SESSION['userid']);

    if ($action === "like") {
        // Check if the like already exists
        $checkQuery = "SELECT * FROM likes WHERE user_id = $userid AND product_id = $product_id";
        $checkResult = mysqli_query($conn, $checkQuery);
        
        if (mysqli_num_rows($checkResult) == 0) {
            $query = "INSERT INTO likes (user_id, product_id) VALUES ($userid, $product_id)";
            $result = mysqli_query($conn, $query);
            echo json_encode(["success" => $result]);
            exit;
        } else {
            echo json_encode(["success" => false, "error" => "Already liked"]);
            exit;
        }
    } 
    elseif ($action === "unlike") {
        $query = "DELETE FROM likes WHERE user_id = $userid AND product_id = $product_id";
        $result = mysqli_query($conn, $query);
        echo json_encode(["success" => $result]);
        exit;
    }
}

echo json_encode(["success" => false, "error" => "Invalid request"]);
exit;
?>
