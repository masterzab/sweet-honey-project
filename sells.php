<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['seller-name'];
    $email = $_POST['seller-email'];
    $amount = $_POST['amount'];
    $location = $_POST['location'];

    $stmt = $conn->prepare("INSERT INTO sellers (name, email, amount, location) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $email, $amount, $location);

    if ($stmt->execute()) {
        echo "Thank you! We’ll contact you about your honey.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
