<?php

// Get the form data
$name = $_POST['name'];
$price = $_POST['price'];
$units = $_POST['units'];

// Create connection
$conn = new mysqli("localhost", "root", "", "rg");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO products (name, unit_price, units) VALUES ('$name', '$price', '$units')";

if ($conn->query($sql) === TRUE) {
    // Product added successfully
    echo json_encode(['success' => true]);
} else {
    // Error adding product
    echo json_encode(['success' => false, 'message' => $conn->error]);
}

$conn->close();