<?php
header("Content-Type: application/json"); 
session_start();
class Examination {
    private $connect;
    
    public function __construct() {
        try {
            $this->connect = new PDO("mysql:host=localhost;dbname=survey", "root", "");
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die(json_encode(["status" => "error", "message" => "Database connection failed: " . $e->getMessage()]));
        }
    }

    public function emailExists($email) {
        $stmt = $this->connect->prepare("SELECT id FROM user WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->rowCount() > 0;
    }

    public function phoneExists($phone) {
        $stmt = $this->connect->prepare("SELECT id FROM user WHERE phone = ?");
        $stmt->execute([$phone]);
        return $stmt->rowCount() > 0;
    }

    public function insertUser($name, $address, $phone, $email, $industry) {
        $stmt = $this->connect->prepare("INSERT INTO user (name, address, phone, email, industry) VALUES (?, ?, ?, ?, ?)");
        if ($stmt->execute([$name, $address, $phone, $email, $industry])) {
            return $this->connect->lastInsertId(); // Get last inserted user ID
        }
        return false;
    }
}
file_put_contents("log.txt", print_r($_POST, true));
// Handle AJAX Request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $exam = new Examination();

    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $address = trim(filter_var($_POST['address'], FILTER_SANITIZE_STRING));
    $phone = trim(filter_var($_POST['phone'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $industry = $_POST['industry'];

    if (empty($name) || empty($address) || empty($phone) || empty($email) || empty($industry)) {
        echo json_encode(["status" => "error", "message" => "All fields are required!"]);
        exit;
    }

    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        echo json_encode(["status" => "error", "message" => "Invalid name format!"]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format!"]);
        exit;
    }

    if (!preg_match("/^\d{10,15}$/", $phone)) {
        echo json_encode(["status" => "error", "message" => "Phone number must be 10-15 digits long!"]);
        exit;
    }

    // if (strlen($password) < 8 || !preg_match("/[A-Z]/", $password) || !preg_match("/\d/", $password)) {
    //     echo json_encode(["status" => "error", "message" => "Password must be at least 8 characters long, contain a number, and an uppercase letter!"]);
    //     exit;
    // }

    if ($exam->emailExists($email)) {
        echo json_encode(["status" => "error", "message" => "Email already registered!"]);
        exit;
    }

    if ($exam->phoneExists($phone)) {
        echo json_encode(["status" => "error", "message" => "Phone number already registered!"]);
        exit;
    }

    // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $userId = $exam->insertUser($name, $address, $phone, $email, $industry);
    $_SESSION['user_id'] = $userId;
    // $_SESSION['user_id'] = $userId;
        $_SESSION['name'] = $name;
    if ($_SESSION['user_id'] || $_SESSION['name']) {
        $use_id = $_SESSION['user_id'];
       $nam = $_SESSION['name'];
        $surveyURL = "assessment.php";
        // $surveyURL = "assessment.php?user_id=$use_id&name=" . urlencode($nam);
        // $surveyURL = "assessment.php?user_id=$use_id&name=" . urlencode($name);
        echo json_encode(["status" => "success", "message" => "User registered successfully!", "redirect" => $surveyURL]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to insert data!"]);
    }
}
?>
