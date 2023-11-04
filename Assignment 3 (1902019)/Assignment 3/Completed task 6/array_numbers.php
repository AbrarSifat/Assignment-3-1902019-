<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Array Operations</h2>

        <?php
        // Define the array
        $numbers = array(2, 4, 6, 8, 10);

        // i. Print the first element of the array.
        echo "<p>First Element: " . $numbers[0] . "</p>";

        // ii. Print the last element of the array.
        $lastIndex = count($numbers) - 1;
        echo "<p>Last Element: " . $numbers[$lastIndex] . "</p>";

        // iii. Add a new element with the value of 12 to the end of the array.
        $numbers[] = 12;

        // iv. Calculate the sum of all the elements in the array and print the result.
        $sum = array_sum($numbers);
        echo "<p>Sum of Array Elements: " . $sum . "</p>";
        ?>

    </div>

    <!-- Add Bootstrap JS and jQuery scripts if needed -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
