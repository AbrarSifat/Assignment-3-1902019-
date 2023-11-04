<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowels & Even Sum</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1> Even Sum</h1>
        
    
        <!-- Form for sum of even numbers -->
        <form action="#" method="POST">
            <div class="form-group">
                <label for="numbers">Enter numbers (comma-separated):</label>
                <input type="text" class="form-control" id="numbers" name="numbers" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate Even Sum</button>
        </form>

        <?php
        function sumEvenNumbers($arr) {
            $numbers = explode(",", $arr);
            $sum = 0;
            foreach ($numbers as $number) {
                $num = (int)$number;
                if ($num % 2 == 0) {
                    $sum += $num;
                }
            }
            return $sum;
        }

        if (isset($_POST['numbers'])) {
            $inputNumbers = $_POST['numbers'];
            $evenSum = sumEvenNumbers($inputNumbers);
            echo "<p>The sum of even numbers is: $evenSum</p>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
