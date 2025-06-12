<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("INSERT INTO orders (name, email, quantity, address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $email, $quantity, $address);

    if ($stmt->execute()) {
        echo "Thank you, your order has been received!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
