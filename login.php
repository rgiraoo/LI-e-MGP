<?php
session_start();

// Make sure the user is not already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: index2.php');
    exit;
}

// Check that the form was submitted
if (isset($_POST['login'])) {
    // Connect to the database
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rg";
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? 1 : 0;

    // Prepare the query
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query returned any results
    if (mysqli_num_rows($result) > 0) {
        // Fetch the user data
        $user = mysqli_fetch_assoc($result);

        // Update the remember_token in the db
        if ($remember) {
            $remember_token = bin2hex(random_bytes(16));
            $query = "UPDATE users SET remember_token = '$remember_token' WHERE id = '$user[id]'";
            mysqli_query($conn, $query);
        }

        // Store the user data in the session
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];

        // Redirect to the dashboard
        header('Location: index2.php');
        exit;
    } else {
        // Invalid login
        echo "Invalid email or password";
    }

    // Close the connection
    mysqli_close($conn);
}
?>
