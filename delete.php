<?php
    include 'db.php'; // Include the database connection file

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM products1 WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Product deleted successfully";
        } else {
            echo "Error deleting product: " . mysqli_error($conn);
        }
    }
?>