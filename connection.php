<?php
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