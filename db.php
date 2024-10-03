<?php
$host = 'localhost';
$dbname = 'CAT1';
$username = 'app_user'; // Change as needed
$password = 'your_password'; // Change as needed

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
