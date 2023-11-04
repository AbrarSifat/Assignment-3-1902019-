<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Simple Calculator</h2>
        <form method="post">
            <div class="form-group">
                <label for="num1">Number 1:</label>
                <input type="text" class="form-control" name="num1" required>
            </div>
            <div class="form-group">
                <label for="num2">Number 2:</label>
                <input type="text" class="form-control" name="num2" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            echo "<h4 class='mt-4'>Results:</h4>";
            echo "Sum: " . ($num1 + $num2) . "<br>";
            echo "Difference: " . ($num1 - $num2) . "<br>";
            echo "Product: " . ($num1 * $num2) . "<br>";
            echo "Quotient: " . ($num1 / $num2);
        }
        ?>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts if needed -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
