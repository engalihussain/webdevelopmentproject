<?php
// Simple database connection file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant_menu";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// Set Arabic encoding
$conn->set_charset("utf8");
?>
