<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        require('config.php'); // Include your database connection configuration

        $user_id = $_SESSION['user_id'];

        // Query the database to retrieve the username
        $query = "SELECT username FROM users WHERE id = $user_id";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $username = $row['username'];

            echo "<div class='container'>";
            echo "<h2 class='mt-4'>Welcome, $username!</h2>";
            echo "<a class='btn btn-primary mt-2' href='logout.php'>Logout</a>";
            echo "</div>";
        } else {
            echo "Error retrieving username.";
        }
    } else {
        echo "You are not logged in. <a href='login.php'>Login here</a>";
    }
    ?>

    <!-- Add Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
