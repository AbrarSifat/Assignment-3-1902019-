<?php
// Database configuration
$hostname = "localhost";
$username = "root";
$password = "";
$database = "question4";

// Create a database connection
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Insert user information into the database
    $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if (mysqli_query($connection, $query)) {
        // Successful insertion
        echo "Your information has been successfully saved. Thank you!";
    } else {
        // Error during insertion
        echo "Error: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}
?>
