<?php
session_start();

// Database connection settings
$host = 'localhost'; // Your database host
$dbname = 'survey'; // Your database name
$username = 'root'; // Your database username
$password = ''; // Your database password

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // Create a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get JSON data from the request
    $data = json_decode(file_get_contents('php://input'), true);

    // Extract scores from the JSON data
    $identity_score = isset($data['identity']) ? (int)$data['identity'] : 0;
    $device_score = isset($data['device']) ? (int)$data['device'] : 0;
    $infra_score = isset($data['infra']) ? (int)$data['infra'] : 0;
    $data_score = isset($data['data']) ? (int)$data['data'] : 0;
    $app_score = isset($data['app']) ? (int)$data['app'] : 0;
    $network_score = isset($data['network']) ? (int)$data['network'] : 0;

if (!isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    echo json_encode(["status" => "error", "message" => "User not logged in."]);
    exit;
}


 $user_id = $_SESSION["user_id"];


    // Prepare and execute the SQL query
    $stmt = $pdo->prepare("INSERT INTO survey_results (user_id, name, identity_score, device_score, infra_score, data_score, app_score, network_score) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$user_id, $identity_score, $device_score, $infra_score, $data_score, $app_score, $network_score]);

    // Send a success response
    echo json_encode(['status' => 'success', 'message' => 'Survey results saved successfully']);
} catch (PDOException $e) {
    // Send an error response
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
} catch (Exception $e) {
    // Send a general error response
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
}
?>