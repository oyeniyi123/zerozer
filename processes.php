<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header("Content-Type: application/json"); // Ensure response is JSON
class Survey{
    private $conn;
    function __construct(){
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=survey", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die(json_encode(["status" => "error", "message" => "Database connection failed: " . $e->getMessage()]));
        }
    }

   public function emailExist($email){
    $stmt = $this->conn->prepare("SELECT id FROM user WHERE email = ?");
    $stmt = $this->execute([$email]);
     return $stmt->rowCount() > 0;
    }
    public function pexist($phone){
        $stmt = $this->conn->prepare("SELECT id FROM user WHERE phone = ?");
        $stmt= $this->execute([$phone]);
     return $stmt->rowCount() > 0;
    }
    public function insert($name, $add, $phone, $email,  $industry){
        $stmt = $this->conn->prepare("INSERT INTO user(name, address, phone, email, industry)VALUES(?, ?, ?, ?, ?)");
       if ( $stmt->execute($name, $add, $phone, $email, $industry)) {   
        return $stmt->conn->lastInsertId();
       } 
    
        return false;
       
    }
}
file_put_contents("log.txt", print_r($_POST, true));

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $survey = new Survey();

    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
    $address = trim(filter_var($_POST['address'], FILTER_SANITIZE_STRING));
    $phone = trim(filter_var($_POST['phone'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $industry = $_POST['industry'];

    if (empty($name) || empty($address) || empty($phone) || empty($email) || empty($industry)) {
        echo json_encode(["status" => "error", "message" => "All fields are required!"]);
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

    if ($survey->emailExist($email)) {
        echo json_encode(["status" => "error", "message" => "Email already registered!"]);
        exit;
    }

    if ($survey->pexist($phone)) {
        echo json_encode(["status" => "error", "message" => "Phone number already registered!"]);
        exit;
    }
    // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $userId = $survey->insert($name,  $phone, $address, $email, $industry);
    if ($userId) {
        $surveyURL = "survay.php?id=$userId&name=" . urlencode($name);
        echo json_encode(["status" => "success", "message" => "User registered successfully!", "redirect" => $surveyURL]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to insert data!"]);
    }
}