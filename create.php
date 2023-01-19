<?php
    include 'db.php'; // Include the database connection file

    if (isset($_POST['create'])) {
        $name = $_POST['name'];
        $categories = $_POST['categories'];
        $added_by = $_POST['added_by'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $sql = "INSERT INTO products1 (name, categories, added_by, quantity, price) VALUES ('$name', '$categories', '$added_by', '$quantity', '$price')";
        if (mysqli_query($conn, $sql)) {
            echo "New product created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>