<?php
session_start();

// Connect to database
$conn = mysqli_connect('localhost','root','','rg');

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $terms = isset($_POST['terms']) ? 1 : 0;

    // Validate form data
    if(empty($name) || empty($email) || empty($password) || empty($confirm_password)){
        echo "Please fill in all fields";
    } else if($password != $confirm_password){
        echo "Passwords do not match";
    } else if(!$terms){
        echo "Please accept the terms and conditions";
    } else {
        // Insert user into database
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $query);

        if($result){
            // Start a session
            $_SESSION['email'] = $email;
            // Redirect user to protected page
            header("Location: register.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
