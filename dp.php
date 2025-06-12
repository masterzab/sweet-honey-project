<?php
$host = "localhost";
$user = "root";
$password = ""; // For XAMPP, change this on live server
$db = "honey_website";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
