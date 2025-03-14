<?php
session_start();
require_once "connection.php"; // Database connection

header("Content-Type: application/json");

// if (!isset($_SESSION["user_id"])) {
//     echo json_encode(["status" => "error", "message" => "User not logged in."]);
//     exit;
// }
// if (!$_GET["user_id"]) {
// $user_id = $_GET["user_id"];

//     echo json_encode(["status" => "error", "message" => "User not logged in."]);
//     exit;
// }
$user_id = 3;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $results = json_decode($_POST["results"], true);
        
        if (!$results) {
            echo json_encode(["status" => "error", "message" => "Invalid data format."]);
            exit;
        }

        $stmt = $conn->prepare("
            INSERT INTO survey_results (user_id, identities, endpoint, infrastructure, data, apps, network, created_at) 
            VALUES (:user_id, :identities, :endpoint, :infrastructure, :data, :apps, :network, NOW())
        ");

        $stmt->execute([
            ":user_id" => $user_id,
            ":identities" => $results["identities"],
            ":endpoint" => $results["endpoint"],
            ":infrastructure" => $results["infrastructure"],
            ":data" => $results["data"],
            ":apps" => $results["apps"],
            ":network" => $results["network"]
        ]);

        echo json_encode(["status" => "success", "message" => "Survey results saved!"]);
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Database error: " . $e->getMessage()]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>
